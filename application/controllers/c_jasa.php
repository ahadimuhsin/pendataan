<?php

/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 1/15/2018
 * Time: 10:28 AM
 */
class c_jasa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('jasa_model');
        $this->load->library('form_validation');
        $this->load->model('company_model');
    }

    public function add_jasa()
    {
        $this->load->view('admin/add_company');
    }

//untuk menambha data pelayanan jasa
    public function jasa_add()
    {
        $data = array(
            'no_jaringan' => $this->input->post('no_jaringan'),
            'no_company' => $this->input->post('no_company'),
            'subservices' => $this->input->post('subservices'),
            'services' => $this->input->post('services'),
            'product_family' => $this->input->post('product_family'),
            'contract_start_date' => $this->input->post('contract_start_date'),
            'contract_end_date' => $this->input->post('contract_end_date'),
            'spk_number' => $this->input->post('spk_number'),
            'spk_date' => $this->input->post('spk_date'),
            'spk_handover_date' => $this->input->post('spk_handover_date'),
            'otc' => $this->input->post('otc'),
            'mrc' => $this->input->post('mrc'),
            'type' => $this->input->post('type'),
            'keterangan' => $this->input->post('keterangan')
        );

        $insert = $this->jasa_model->jasa_add($data);
        echo json_encode(array("status" => TRUE));
        //untuk log file
        date_default_timezone_set('Asia/Bangkok');
        $date = new DateTime();
        $date = $date->format("d:m:y h:i:s");
        $file = 'log/log.txt'; //nama file
        $nomor = $data['spk_number'];
        $message = $date. " " .$_SESSION['username']." menambahkan data pelayanan jasa dengan nomor SPK " . "".$nomor.PHP_EOL;
        file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
        //sampai sini log file
    }
    public function ajax_edit($id)
    {
        $data = $this->jasa_model->get_by_id($id);



        echo json_encode($data);
    }

//untuk update data pelayanana jasa
    public function jasa_update()
    {
        {
            $data = array(
                'no_jaringan' => $this->input->post('no_jaringan'),
                'no_company' => $this->input->post('no_company'),
                'subservices' => $this->input->post('subservices'),
                'services' => $this->input->post('services'),
                'product_family' => $this->input->post('product_family'),
                'contract_start_date' => $this->input->post('contract_start_date'),
                'contract_end_date' => $this->input->post('contract_end_date'),
                'spk_number' => $this->input->post('spk_number'),
                'spk_date' => $this->input->post('spk_date'),
                'spk_handover_date' => $this->input->post('spk_handover_date'),
                'otc' => $this->input->post('otc'),
                'mrc' => $this->input->post('mrc'),
                'type' => $this->input->post('type'),
                'keterangan' => $this->input->post('keterangan')
            );
            $this->jasa_model->jasa_update(array('no_jaringan' => $this->input->post('no_jaringan')), $data);
            echo json_encode(array("status" => TRUE));
            //untuk log file
            date_default_timezone_set('Asia/Bangkok');
            $date = new DateTime();
            $date = $date->format("d:m:y h:i:s");
            $file = 'log/log.txt'; //nama file
            $message = $date. " " .$_SESSION['username']." mengubah data pelayanan jasa dengan nomor jaringan " . " ".date("Y").sprintf("%06s",$data['no_jaringan']).PHP_EOL;
            file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
            //sampai sini log file
        }
    }
//untuk menghapus data pelayanan jasa
    public function jasa_delete($no_jaringan)
    {
        $this->jasa_model->delete_by_id($no_jaringan);
        echo json_encode(array("status" => TRUE));
        //untuk log file
        date_default_timezone_set('Asia/Bangkok');
        $date = new DateTime();
        $date = $date->format("d:m:y h:i:s");
        $file = 'log/log.txt'; //nama file
        $message = $date. " " .$_SESSION['username']." menghapus data pelayanan jasa dengan nomor jaringan " . " ".date("Y").sprintf("%06s",$no_jaringan).PHP_EOL;
        file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
        //sampai sini log file
    }


//fungsi export ke bentuk excel
    public function export()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';
//        $today = date("m.d.y");
//        $format_date = array(
//            'numberformat' => array(
//                'code' => 'DD/MM/YYYY',
//            ),
//        );
//



        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Muhsin Ahadi')
            ->setLastModifiedBy('Muhsin Ahadi')
            ->setTitle("Data Perusahaan")
            ->setSubject("Perusahaan")
            ->setDescription("Laporan Semua Data Perusahaan")
            ->setKeywords("Data Perusahaan");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $default_border = array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb'=>'1006A3')
        );
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID, //memberi warna header
                'color' => array('rgb'=>'E1E0F7'),
            )
        );
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Pelayanan Jasa"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:N1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "No. Company");
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Company"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "Parent Company"); // Set kolom B3 dengan tulisan "NIS"
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "No. Jaringan/Opportunity"); // Set kolom C3 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "Business Consultant"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "Assignment"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "Subservices"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('H3', "Services"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('I3', "Product Family"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('J3', "Kontrak Start Date"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('K3', "Kontrak End Date"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('L3', "SPK/SO/Quote Number"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('M3', "Tanggal SPK Terbit"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('N3', "Waktu Penyerahan SPK"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('O3', "OTC"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('P3', "MRC"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('Q3', "Type"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('R3', "Keterangan"); // Set kolom E3 dengan tulisan "ALAMAT"

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);

        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $jasa = $this->jasa_model->get_all_jasa();
//        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($jasa as $data) { // Lakukan looping pada variabel jasa
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, date("Y").sprintf("%03s",$data->no_company));
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->company);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->parent_company);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, date("Y").sprintf("%03s",$data->no_jaringan));
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data->business_consultant);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data->assignment);
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $data->subservices);
            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $data->services);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data->product_family);
            $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data->contract_start_date);
            $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $data->contract_end_date);
            $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data->spk_number);
            $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $data->spk_date);
            $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $data->spk_handover_date);
            $excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $data->otc);
            $excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow, $data->mrc);
            $excel->setActiveSheetIndex(0)->setCellValue('Q' . $numrow, $data->type);
            $excel->setActiveSheetIndex(0)->setCellValue('R' . $numrow, $data->keterangan);




            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
            $date = PHPExcel_Style_NumberFormat::toFormattedString($data, "M/D/YYYY");
            $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row,$date);
            $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('Q' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('R' . $numrow)->applyFromArray($style_row);


            // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(30); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(30); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(30); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
        $excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);


        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Laporan Data Pelayanan Jasa");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Pelayanan Jasa"'.date("d-F-Y").'".xlsx'); // Set nama file excel nya

        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
        //untuk log file
        date_default_timezone_set('Asia/Bangkok');
        $date = new DateTime();
        $date = $date->format("d:m:y h:i:s");
        $file = 'log/log.txt'; //nama file
        $message = $date. " " .$_SESSION['username']." mendownload data pelayanan jasa".PHP_EOL;
        file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
        //sampai sini log file
    }
}