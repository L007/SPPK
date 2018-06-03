<?php
class HasilAnalisa
{

	public $idAnalisa;
	public $gejala;
	public $idPenyakit;


	function __construct($idGejala,$gejala,$idPenyakit)
	{
		$this->idGejala=$idGejala;
		$this->gejala=$gejala;
		$this->idPenyakit=$idPenyakit;
	}

	public static function tambahGejala($gejala,$idPenyakit){
		$db = DB::getInstance();
		$req = $db->query("INSERT INTO gejala
			VALUES (NULL,'".$gejala."','".$idPenyakit."');
			");

		return $req;
	}

	public static function viewGejala(){
		$list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM gejala");
		foreach ($req->fetchAll() as $gejala) {
			$list[] = new Gejala($gejala['idGejala'],$gejala['gejala'],$gejala['idPenyakit']
				);
		}
		return $list;
	}

	public static function kodeAnalisa(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT COUNT(idAnalisa) as jumlahAnalisa FROM analisa");


		foreach ($req as $item) {
			$list[]=array(
				'kodeAnalisa'=>$item['jumlahAnalisa'],
				

				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}


	}

	public static function listGejala(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * from cocok");


		foreach ($req as $item) {
			$list[]=array(
				'idCocok'=>$item['idCocok'],
				'idGejala'=>$item['idGejala'],
				'idPenyakit'=>$item["idPenyakit"]
				

				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}
	}

	public static function jumlahPenyakit(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT COUNT(idPenyakit) as jumlahPenyakit FROM penyakit");


		foreach ($req as $item) {
			$list[]=array(
				'jumlahPenyakit'=>$item['jumlahPenyakit']
				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}
	}
	public static function checkGejala($checkGejala){
		$list=[];
		$list=$checkGejala;

		
	
			return $list;
		


		
	}


}

?>
