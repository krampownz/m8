<?php
/**
 * @author Grup2
 * @version 1.1
 * @since 2015
 */		
	class Professor{
                /**
                 * @var int $status si esta en 1 esta actiu si esta en 0 esta borrat
                 * @param int $status bolean per a sabre si esta actiu o borrat.
                 */
		private $status = 1;
                /**
                 * @var String $nom variable que garda el nom
                 * @param String $nom per a guardar el nom 
                 */
		private $nom;
                /**          
                 * @var String $cognoms variable que guarda el cognom
                 * @param String $cognoms guarda els cognoms
                 */
		private $cognoms;
                /**
                 *@param String $dni guarda el DNI
                 * @var String $dni variable que guarda el DNI
                 *                  */
		private $dni;
                /**
                 * @param String $correu per a guardar el correu
                 * @var String $correu variable encarregada de guardar el correu
                 */
		private $correu;
		
                /**
                 * 
                 * @param String $n fa referencia al nom 
                 * @param String $c fa referencia al cognom
                 * @param String $d fa referencia al dni
                 * @param String $e fa referencia al correu
                 * @example - (Paco,Paquito,12345678X,asd@asd.com) 
                 * @description Constructor de professors
                 */

		public function Professor( $n, $c, $d, $e){ 
			$this->nom=$n;
			$this->cognoms=$c;
			$this->dni=$d;
			$this->correu=$e;
		}
		/**
                 * @return String ens retorna la variable amb el Nom
                 */
		public function getNom() {
			return $this->nom;
		}
                /**
                 * @return String ens retorna la variable amb els Cognoms
                 */
                public function getCognoms() {
			return $this->cognoms;
		}
                
		/**
                 * @return String ens retorna la variable amb el DNI
                 */
		public function getDni() {
			return $this->dni;
		}
		/**
                * @return String Retorna un string amb el valor de les varibles Nom,Cognom,DNI i correu
                * @brief Ens retornara el valor de cada professor.Ex paco;paquito;12345678X;asda@gmail.com
                 */			
		public function toString(){
			return $this->nom.';'.$this->cognoms.';'.$this->dni.';'.$this->correu.';';	
		}
	}			
?>