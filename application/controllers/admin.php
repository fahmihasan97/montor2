<?php
 if ( ! defined('BASEPATH')) exit(header('Location:../'));
class Admin extends CI_controller
{
  function __construct()
  {
   parent:: __construct();
   // error_reporting(0);
    if($this->session->userdata('admin') != TRUE){
      redirect(base_url(''));
      exit;
    };
   $this->load->model('m_admin');
  }

  public function index()
  {
      $x = array('judul' =>'Halaman Administrator');
      /*$table_to_count = ['krisis','']
      for ($i=0; $i <=count($table_to_count) ; $i++) { 
        $count_data[i]=$this->m_admin->count_data($table);
      }*/
      tpl('admin/home',$x);
  }

  public function overview()
  {
   $x = array('judul' =>'Data overview', 
              'data'=>$this->db->get('overview')->result_array()); 
   tpl('admin/overview',$x);
  }

   public function details($id)
  {
    $data = array('id_krisis' => $id);
    $data = $this->m_admin->data_details($data)->result();
    $x = array(
      'judul' => 'Details Data',
      'data' => $data
    );
    tpl('admin/details', $x);
  }

  public function overview_tambah()
  {
  $x = array('judul'        => 'Tambah Data' ,
              'aksi'        => 'tambah',
              'tl'=> "",
              'tower'    => "",
              'jenis'=> "",
              'status'    => "",
              'tgl'=> "",
              'update'    => "",
              'penanganan'   => ""); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'tl'=>$this->input->post('tl'),
        'tower'    =>$this->input->post('tower'),
        'jenis'=>$this->input->post('jenis'),
        'status'    =>$this->input->post('status'),
        'tgl'=>$this->input->post('tgl'),
        'update'    =>$this->input->post('update'),
        'penanganan'         =>$this->input->post('penanganan'));
      $cek=$this->db->insert('overview',$inputData);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/overview'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/overview_form',$x);
    }
  }
    
  public function overview_edit($id='')
  {
  $sql=$this->db->get_where('overview',array('id_overview'=>$id))->row_array(); 
  $x = array('judul'        =>'Tambah Data' ,
              'aksi'        =>'tambah',
        'tl'=>$sql['tl'],
        'tower'    =>$sql['tower'],
        'jenis'=>$sql['jenis'],
        'status'    =>$sql['status'],
        'tgl'    =>$sql['tgl'],
        'update'=>$sql['update'],
        'penanganan'         =>$sql['penanganan']); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'tl'=>$this->input->post('tl'),
        'tower'    =>$this->input->post('tower'),
        'jenis'=>$this->input->post('jenis'),
        'status'    =>$this->input->post('status'),
        'tgl'=>$this->input->post('tgl'),
        'update'    =>$this->input->post('update'),
        'penanganan'         =>$this->input->post('penanganan'));
      $cek=$this->db->update('overview',$inputData,array('id_overview'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/overview'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/overview_form',$x);
    }
  }

  
  public function overview_hapus($id='')
  {
   $cek=$this->db->delete('overview',array('id_overview'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/overview'));
   }
  }

  public function krisis($value='')
  {
   $x = array('judul' =>'Data krisis', 
              'data'=>$this->db->get('krisis')->result_array()); 
   tpl('admin/krisis',$x);
  }

  public function ls_krisis($value='')
  {
   $data=$this->m_admin->krisis()->row_array();
   echo json_encode($data);
  }

  public function krisis_tambah($value='')
  {
  $x = array('judul'       => 'Tambah Data',
              'aksi'        => 'tambah',
              'upt'=> '',
              'ultg'    => '',
              'penghantar'=> '',
              'kv'    => '',
              'tower'=> '',
              'tgl'    => '',
              'jenis'=> '',
              'kkp'    => '',
              'kelling'=> '',
              'kelfo'    => '',
              'kelpo'=> '',
              'skoli'    => '',
              'skopo'=> '',
              'skohu'    => '',
              'klali'=> '',
              'klapo'=> '',
              'klahu'    => '',
              'anomali'=> '',
              'tautan'    => '',
              'risiko'=> '',
              'mitigasi'   => '',
              'penanganan'   => '',
              'foto'      => '',
              'foto1'      => '',
              'foto2'      => '',
              'foto3'      => '',
              'keterangan'   => ''
            ); 
     if (isset($_POST['kirim'])) {
      
      $config['upload_path'] = './template/data/'; 
      $config['allowed_types'] = 'bmp|jpg|png|jpeg';  
      $config['file_name'] = 'foto_'.time();  
      $this->load->library('upload', $config);
      //$this->upload->initialize($config);  

      $this->upload->do_upload('file1');
      $file1 = $this->upload->data();
      $this->upload->do_upload('file2');
      $file2 = $this->upload->data();
      $this->upload->do_upload('file3');
      $file3 = $this->upload->data();
      $this->upload->do_upload('file4');
      $file4 = $this->upload->data();

      $upload = true;
      
      if($upload){
        $SQLinsert=array(
        'upt'=>$this->input->post('upt'),
        'ultg'=>$this->input->post('ultg'),
        'penghantar'=>$this->input->post('penghantar'),
        'kv'=>$this->input->post('kv'),
        'foto'=>$file1['file_name'],
        'foto1'=>$file2['file_name'],
        'foto2'=>$file3['file_name'],
        'foto3'=>$file4['file_name'],
        'tower'=>$this->input->post('tower'),
        'tgl'=>$this->input->post('tgl'),
        'jenis'=>$this->input->post('jenis'),
        'kkp'=>$this->input->post('kkp'),
        'kelling'=>$this->input->post('kelling'),
        'kelpo'=>$this->input->post('kelpo'),
        'kelfo'=>$this->input->post('kelfo'),
        'penanganan'=>$this->input->post('penanganan'),
        'skoli'=>$this->input->post('skoli'),
        'skopo'=>$this->input->post('skopo'),
        'skohu'=>$this->input->post('skohu'),
        'klali'=>$this->input->post('klali'),
        'klapo'=>$this->input->post('klapo'),
        'klahu'=>$this->input->post('klahu'),
        'anomali'=>$this->input->post('anomali'),
        'tautan'=>$this->input->post('tautan'),
        'risiko'=>$this->input->post('risiko'),
        'mitigasi'=>$this->input->post('mitigasi'),
        'keterangan'=>$this->input->post('keterangan')
        
        );
        $cek=$this->db->insert('krisis',$SQLinsert);
        if($cek){
            $pesan='<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                       Data Berhasil Di Tambahkan.
                      </div>';
            $this->session->set_flashdata('pesan',$pesan);
            redirect(base_url('admin/krisis'));
        }else{
         echo "QUERY SQL ERROR";
        }
      }else{
        echo $this->upload->display_errors();
      }
    }else{
      tpl('admin/krisis_form',$x);
    } 
 }
    
  public function krisis_edit($id='')
  {
  $data=$this->db->get_where('krisis',array('id_krisis'=>$id))->row_array(); 
  $x = array('judul'        =>'Tambah Data' ,
              'aksi'        =>'tambah',
        'upt'=>$data['upt'],
        'ultg'    =>$data['ultg'],
        'penghantar'=>$data['penghantar'],
        'kv'    =>$data['kv'],
        'tgl'=>$data['tgl'],
        'jenis'=>$data['jenis'],
        'tower'=>$data['tower'],
        'foto'=>$data['foto'],
        'foto1'=>$data['foto1'],
        'foto2'=>$data['foto2'],
        'foto3'=>$data['foto3'],
        'kkp'    =>$data['kkp'],
        'kelling'=>$data['kelling'],
        'kelfo'    =>$data['kelfo'],
        'kelpo'    =>$data['kelpo'],
        'skoli'    =>$data['skoli'],
        'skopo'=>$data['skopo'],
        'skohu'    =>$data['skohu'],
        'klali'    =>$data['klali'],
        'klapo'    =>$data['klapo'],
        'klahu'    =>$data['klahu'],
        'anomali'    =>$data['anomali'],
        'tautan'    =>$data['tautan'],
        'risiko'=>$data['risiko'],
        'mitigasi'    =>$data['mitigasi'],
        'penanganan'=>$data['penanganan'],
        'keterangan'=>$data['keterangan']); 
    if (isset($_POST['kirim'])) {     
    
    // if(empty($_FILES['file']['name'])){
    //   $this->session->set_flashdata('pesan',$pesan);
    //   redirect(base_url('admin/krisis'));
    // }else{
        $config['upload_path'] = './template/data/'; 
        $config['allowed_types'] = 'bmp|jpg|png|jpeg';  
        $config['file_name'] = 'foto_'.time(); 

        $this->load->library('upload', $config);
          
        $file1 = $data['foto'];
        if (!empty($_FILES['file1']['name'])) {
          # code...
          $this->upload->do_upload('file1');
          $fil = $this->upload->data();
          $file1 = $fil['file_name'];
        }
        $file2 = $data['foto1'];
        if (!empty($_FILES['file2']['name'])) {
          # code...
          $this->upload->do_upload('file2');
          $fil = $this->upload->data();
          $file2 = $fil['file_name'];
        }
        $file3 = $data['foto2'];
        if (!empty($_FILES['file3']['name'])) {
          # code...
          $this->upload->do_upload('file3');
          $fil = $this->upload->data();
          $file3 = $fil['file_name'];
        }
        $file4 = $data['foto3'];
        if (!empty($_FILES['file4']['name'])) {
          # code...
          $this->upload->do_upload('file4');
          $fil = $this->upload->data();
          $file4 = $fil['file_name'];
        }
 
        if(true){
          $SQLinsert=array(
          'upt'=>$this->input->post('upt'),
          'ultg'=>$this->input->post('ultg'),
          'penghantar'=>$this->input->post('penghantar'),
          'kv'=>$this->input->post('kv'),
          'tgl'=>$this->input->post('tgl'),
          'jenis'=>$this->input->post('jenis'),
          'tower'=>$this->input->post('tower'),
          'kkp'=>$this->input->post('kkp'),
          'kelling'=>$this->input->post('kelling'),
          'kelfo'=>$this->input->post('kelfo'),
          'kelpo'=>$this->input->post('kelpo'),
          'skoli'=>$this->input->post('skoli'),
          'skopo'=>$this->input->post('skopo'),
          'skohu'=>$this->input->post('skohu'),
          'klali'=>$this->input->post('klali'),
          'klahu'=>$this->input->post('klahu'),
          'klapo'=>$this->input->post('klapo'),
          'tautan'=>$this->input->post('tautan'),
          'risiko'=>$this->input->post('risiko'),
          'mitigasi'=>$this->input->post('mitigasi'),
          'penanganan'=>$this->input->post('penanganan'),
          'keterangan'=>$this->input->post('keterangan'),
          'foto'=>$file1,
          'foto1'=>$file2,
          'foto2'=>$file3,
          'foto3'=>$file4);
          $cek=$this->db->update('krisis',$SQLinsert,array('id_krisis'=>$id));
          if($cek){
              $pesan='<div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-check"></i> Success!</h4>
                         Data Berhasil Di Edit.
                        </div>';
              $this->session->set_flashdata('pesan',$pesan);
              redirect(base_url('admin/krisis'));
          }else{
           echo "QUERY SQL ERROR";
          }
        }else{
          echo $this->upload->display_errors();
        }
     
    }else{
      tpl('admin/krisis_form',$x);
    }
  }
  
  public function krisis_hapus($id='')
  {

   $foto=$this->db->get_where('krisis',array('id_krisis'=>$id))->row_array();
    if($foto['foto'] != ""){ @unlink('template/data/'.$foto['foto']); }else{ }
   $cek=$this->db->delete('krisis',array('id_krisis'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/krisis'));
   }
  }

//bagian Login Administrais User..


public function user_admin($value='')
{
$x = array('judul' =>'Data Hak Akses',
            'data' =>$this->db->get('admin')); 
 tpl('admin/user_admin',$x);
}

public function user_admin_tambah()
{
if(isset($_POST['kirim'])){
 $data = array(
                'username' =>$this->input->post('username'),
                'password' =>md5($this->input->post('password')),
                'nama' =>$this->input->post('nama'),
                'level' =>$this->input->post('level'), );
 $cek =$this->db->insert('admin',$data);
 if($cek){
      $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Edit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/user_admin'));
 }else{
  buat_alert('SYSTEM ERROR');
 }
 
}else{
$x = array('judul' =>'Data Hak Akses',
           'username' =>'',
           'nama'     =>'',
           'data' =>$this->db->get('admin')); 
 tpl('admin/user_admin_form',$x);
}
}

public function user_admin_edit($id='')
{
$sql=$this->db->get_where('admin',array('id_admin'=>$id))->row_array();  
if(isset($_POST['kirim'])){
 $data = array(
                'username' =>$this->input->post('username'),
                'password' =>md5($this->input->post('password')),
                'nama' =>$this->input->post('nama'),
                'level' =>$this->input->post('level'),);
 $cek =$this->db->update('admin',$data,array('id_admin' =>$id));
 if($cek){
      $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Edit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/user_admin'));
 }else{
  buat_alert('SYSTEM ERROR');
 }
}else{
$x = array('judul' =>'Edit Data Hak Akses',
            'username' =>$sql['username'],
            'nama'     =>$sql['nama'],
            'data' =>$this->db->get('admin')); 
 tpl('admin/user_admin_form',$x);
}
}
public function user_admin_hapus($id='')
{
 if($this->session->userdata('id_admin') == $id){
  $pesan='<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
              Anda Tidak Bisa Menghapus Anda Sendiri.
              </div>';
 $this->session->set_flashdata('pesan',$pesan);
 redirect(base_url('admin/user_admin'));

 }else{ 
 $this->db->delete('admin',array('id_admin' =>$id));
  $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
 $this->session->set_flashdata('pesan',$pesan);
 redirect(base_url('admin/user_admin'));
}
}

public function profil()
{
 if (isset($_POST['kirim'])) {
     $data = array('password' => md5($this->input->post('password')),
                    'nama'    => $this->input->post('nama'), );
      $this->db->update('admin',$data,array('id_admin'=>$this->session->userdata('id_admin')));
      $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Edit Password Anda Adalah '.$this->input->post('password').' .
              </div>';
   $this->session->set_flashdata('pesan',$pesan);
   redirect(base_url('admin/profil'));   
  }else{
   $x = array('judul' =>'Ubah Password Administrator', 
               'data' =>$this->db->get_where('admin',array('id_admin'=>$this->session->userdata('id_admin')))->row_array(),
             );
   tpl('admin/ubah_password',$x);            
  } 

}


// public function profil_krisis($value='')
// {
//   if(isset($_POST['kirim'])){
//     $vaPassword = array('password'=>$this->input->post('password'));
//     $vaWhere    = array('id_krisis'=>$this->session->userdata('id_krisis'));
//     if(isset($_FILES['gambar']['name'])){
//       $config['upload_path'] = './template/data/'; 
//       $config['allowed_types'] = 'bmp|jpg|png';  
//       $config['file_name'] = 'foto_'.time();  
//       $this->load->library('upload', $config);
//       $this->upload->initialize($config);
//       if($this->upload->do_upload('gambar')){
//         $vaFoto     = array('foto'=>$this->upload->file_name);
//         $this->db->update('krisis',$vaFoto,$vaWhere);  
//       }else{
//         echo $this->upload->display_errors();
//       }
//     }
    
//     if($this->input->post('password') !== ""){
//       $this->db->update('krisis',$vaPassword,$vaWhere);  
//     }
    
//     $sql=array(
//       'nip'=>$this->input->post('nip'),
//       'nama'=>$this->input->post('nama'),
//       'jk'=>$this->input->post('jk'),
//       'agama'=>$this->input->post('agama'),
//       'pendidikan'=>$this->input->post('pendidikan'),
//       'alamat'=>$this->input->post('alamat'),
//       'username'=>$this->input->post('username'),
//     );
    
    
//     $cek=$this->db->update('krisis',$sql,$vaWhere);
//     if($cek){
//        $pesan='<div class="alert alert-success alert-dismissible">
//                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
//                   <h4><i class="icon fa fa-check"></i> Success!</h4>
//                  Data Berhasil Di Edit.
//                 </div>';
//       $this->session->set_flashdata('pesan',$pesan);
//       redirect(base_url('admin/profil_krisis'));
//     }else{
//       buat_alert('ERROR');
//     }
//   }else{
//     $data=$this->db->get_where('krisis',array('id_krisis' =>$this->session->userdata('id_krisis')))->row_array();
//     $x = array(
//        'judul' =>'.:: Edit Profil Anda ::.',
//        'aksi'=>'edit',
//        'foto'=>$data['foto'],
//        'nama'=>$data['nama'],
//        'jk'=>$data['jk'],
//        'alamat'=>$data['alamat'],
//        'nip'=>$data['nip'],
//        'agama'=>$data['agama'],
//        'pendidikan'=>$data['pendidikan'],
//        'username'=>$data['username']);
//       tpl('admin/profil_krisis',$x);
//   }
// }




  public function keluar($value='')
  {

  $this->session->sess_destroy();
  echo "<scrip>alert('Anda Telah Keluar Dari Halaman Administrator')</script>";;
  redirect(base_url(''));
  }
   

}
