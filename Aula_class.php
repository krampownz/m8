<?php
		
	class Aula{
                /**
                 * @var int $status si esta en 1 esta actiu si esta en 0 esta borrat
                 * @param int $status bolean per a sabre si esta actiu o borrat.
                 */
		private $status = 1;
                /**
                 *
                 * @var Int $numero, numero que tindra la aula, i el pis. Exemple 202 -> Pis 2, Aula 2
                 * @param int $numero, identificador de l'aula
                 */
		private $numero;
                /**
                 *
                 * @var Int $capacitat, capacitat que tindra l'aula
                 * @param int $capacitat identificador de l'aula
                 */                
		private $capacitat;
                /**
                 *
                 * @var int $ocupacio Nº de alumnes que tindra l'aula
                 * @param int $ocupacio nº de ocupacio de l'aula
                 */
		private $ocupacio=0;
                /**
                 *
                 * @var int $ordinadors nº de ordinadors que pot tindre l'aula
                 */
		private $ordinadors;
                /**
                 *
                 * @var Array $alumnes array que tindra el DNI dels alumnes
                 */
		private $alumnes = array();
                /**
                 * @var Array $professors array que tindra el DNI dels professors
                 */
		private $professors = array();
		
                /**
                 * 
                 * @param type $n fa referencia al numero 
                 * @param type $c fa referencia a la capacitat
                 * @param type $o fa referencia al nº d'ordinadors
                 */
		public function Aula($n, $c, $o){ 
			$this->numero=$n;
			$this->capacitat=$c;
			$this->ordinadors=$o;
		}
		/**
                 * @return Int ens retorna el numero de l'aula
                 */		
		public function getNumero() {
			return $this->numero;
		}
		/**
                 * @description Ens buida el array dels alumnes
                 */
		public function resetAlumnes(){
			unset($this->alumnes);
			$this->alumnes = array($this->capacitat);
		}
		/**
                 * @description Ens buida el array dels professors
                 */		
		public function resetProfessors(){
			unset($this->professors);
			$this->professors = array();
		}
		/**
                 * @description Ens afegueix al array dels alumnes, el seu dni
                 */		
		public function afegirAlumne($dni){
			array_push($this->alumnes, $dni);
		}
		/**
                 * @description Ens afegueix al array dels profesors, el seu dni
                 */
		public function afegirProfessor($dni){
			array_push($this->professors, $dni);
		}
		/**
                 * @return Int ens retorna la capacitat de l'aula 
                 */		
		public function getCapacitat() {
			return (int)$this->capacitat;
		}
		/**
                 * @return Int ens retorna la ocupacio de l'aula 
                 */		
		public function getOcupacio() {
			return $this->ocupacio;
		}
		/**
                 * @description Ens munta 1 cada vegada que gastem la funció. Per a sabre la ocupacio que te l'Aula
                 */		
		public function setOcupacio() {
			
			$this-> ocupacio++;
		}
		/**
                 * @return Array ens retorna els alumnes 
                 */		
		public function getAlumnes() {
			
			return $this->alumnes;
		}
		
	}			
?>
