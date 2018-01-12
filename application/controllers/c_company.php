<?php

/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 1/9/2018
 * Time: 10:16 PM
 */

class c_company extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('company_model');
    }

    public function add_company()
    {
        $this->load->view('admin/add_company');
    }



    public function company_add()
    {
        $data = array(
            'npwp' => $this->input->post('npwp'),
            'no_company' => $this->input->post('no_company'),
            'company' => $this->input->post('company'),
            'parent_company' => $this->input->post('parent_company'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'contact_person' => $this->input->post('contact_person'),
            'title' => $this->input->post('title'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'mobile' => $this->input->post('mobile'),
            'business_consultant' => $this->input->post('business_consultant'),
            'join_date' => $this->input->post('join_date'),
            'assignment' => $this->input->post('assignment')
        );
        /*$data['namaSup']=$this->obat_model->get_supplier();
        $data['id']=$id;*/
        $insert = $this->company_model->company_add($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_edit($id)
    {
        $data = $this->company_model->get_by_id($id);



        echo json_encode($data);
    }

    public function company_update()
    {
        {
            $data = array(
                'no_company' => $this->input->post('no_company'),
                'npwp' => $this->input->post('npwp'),
                'company' => $this->input->post('company'),
                'parent_company' => $this->input->post('parent_company'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'contact_person' => $this->input->post('contact_person'),
                'title' => $this->input->post('title'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'mobile' => $this->input->post('mobile'),
                'business_consultant' => $this->input->post('business_consultant'),
                'join_date' => $this->input->post('join_date'),
                'assignment' => $this->input->post('assignment'),
            );
            $this->company_model->company_update(array('no_company' => $this->input->post('no_company')), $data);
            echo json_encode(array("status" => TRUE));
        }
        }

//    public function obat_delete($barcode)
//    {
//        $this->obat_model->delete_by_id($barcode);
//        echo json_encode(array("status" => TRUE));
//    }



    public function export()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';
        $today = date("m.d.y");
        $format_date = array(
            'numberformat' => array(
                'code' => 'DD/MM/YYYY',
            ),
        );




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
        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Perusahaan"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:N1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "No. Company");
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Company"); // Set kolom A3 dengan tulisan "NO"
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "Parent Company"); // Set kolom B3 dengan tulisan "NIS"
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "NPWP"); // Set kolom C3 dengan tulisan "NAMA"
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "Address"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "City"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "Contact Person"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('H3', "Title"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('I3', "Email"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('J3', "Phone"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('K3', "Mobile"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('L3', "Business Consultant"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('M3', "Join Start Date"); // Set kolom E3 dengan tulisan "ALAMAT"
        $excel->setActiveSheetIndex(0)->setCellValue('N3', "Assignment"); // Set kolom E3 dengan tulisan "ALAMAT"

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
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $company = $this->company_model->get_all_company();
//        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($company as $data) { // Lakukan looping pada variabel siswa
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, date("Y").sprintf("%03s",$data->no_company));
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->company);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->parent_company);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->npwp);
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data->address);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data->city);
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $data->contact_person);
            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $data->title);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data->email);
            $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data->phone);
            $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $data->mobile);
            $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data->business_consultant);
            $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $data->join_date);
            $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $data->assignment);
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

             // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(25); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
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

        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Laporan Data Perusahaan");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Perusahaan.xlsx"'); // Set nama file excel nya

        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }

}
