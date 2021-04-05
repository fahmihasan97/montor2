<?php

/**
* 
*/
class M_laporan extends CI_controller
{
 public function krisis()
 	{
 	return $this->db->query("SELECT * from krisis a,overview b where a.id_overview=b.id_overview");
 	}	
 public function absensi($dari='',$sampai='')
 	{
 	return $this->db->query("SELECT * from absen a, krisis b where a.id_krisis=b.id_krisis AND a.tanggal between '$dari' AND '$sampai' group by a.id_krisis");
 	}	
 public function tpp($dari='',$sampai='')
    {
   return $this->db->query("SELECT * from krisis a,overview b ,tpp c where a.id_overview=a.id_overview AND c.tgl between '$dari' AND '$sampai' 
  	group by c.id_krisis");
    }   

}