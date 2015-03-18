<?php
/**
 * @author Grup2
 * @version 1.0
 * @since 2015
 */
	class Alumne{
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
                 * @param Int $aula per a guardar la aula a la que pertany
                 * @var Int $aula variable encarregada de guardar l'aula
                 */                
		private $aula;
		/**
                 * 
                 * @param String $n fa referencia al nom
                 * @param String $c fa referencia al cognom
                 * @param String $d fa referencia al dni
                 * @param String $e fa referencia al correu
                 * @param Int aula, esta en false per a que no pertany a una clase per defecte.
                 */			
		public function Alumne( $n, $c, $d, $e){ 
			$this->nom=$n;
			$this->cognoms=$c;
			$this->dni=$d;
			$this->correu=$e;
			$this->aula=false;
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
                 * @return String ens retorna la variable amb el Dni
                 */                
		public function getDni() {
			return $this->dni;
		}
		/**
                * @return String Retorna un string amb el valor de les varibles Nom,Cognom,DNI i correu
                * @brief Ens retornara el valor de cada professor.Ex Manuel;MirallesGarcia;87654321X;asda2@gmail.com
                 */				
		public function toString(){
			return $this->nom.';'.$this->cognoms.';'.$this->dni.';'.$this->correu.';';	
		}
		/**
                 * @return Int ens retorna la variable amb l'aula
                 */ 		
		public function getAula() {
			return $this->aula;
		}
		/**
                 * @param Int $aula El numero de l'aula a la qual pertany l'aulumne
                 */
		public function setAula() {
			$this->aula=true;
		}
		
	}			
?>
