<?php
App::uses('AppController', 'Controller');

App::import('Model', 'ReporteGeneral');
App::import('Model', 'Grafica');
App::import('Lib/tcpdf', 'tcpdf');
App::import('Lib/tcpdf/config/lang','eng');


/**
 * ReportTasks Controller
 *
 * @property ReportTask $ReportTask
 * @property PaginatorComponent $Paginator
 */
class ReportTasksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReportTask->recursive = 0;
		$this->set('reportTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReportTask->exists($id)) {
			throw new NotFoundException(__('Invalid report task'));
		}
		$options = array('conditions' => array('ReportTask.' . $this->ReportTask->primaryKey => $id));
		$this->set('reportTask', $this->ReportTask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReportTask->create();
			if ($this->ReportTask->save($this->request->data)) {
				$this->Session->setFlash(__('The report task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The report task could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ReportTask->exists($id)) {
			throw new NotFoundException(__('Invalid report task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReportTask->save($this->request->data)) {
				$this->Session->setFlash(__('The report task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The report task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReportTask.' . $this->ReportTask->primaryKey => $id));
			$this->request->data = $this->ReportTask->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ReportTask->id = $id;
		if (!$this->ReportTask->exists()) {
			throw new NotFoundException(__('Invalid report task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReportTask->delete()) {
			$this->Session->setFlash(__('The report task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The report task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ReportTask->recursive = 0;
		$this->set('reportTasks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ReportTask->exists($id)) {
			throw new NotFoundException(__('Invalid report task'));
		}
		$options = array('conditions' => array('ReportTask.' . $this->ReportTask->primaryKey => $id));
		$this->set('reportTask', $this->ReportTask->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ReportTask->create();
			if ($this->ReportTask->save($this->request->data)) {
				$this->Session->setFlash(__('The report task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The report task could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ReportTask->exists($id)) {
			throw new NotFoundException(__('Invalid report task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReportTask->save($this->request->data)) {
				$this->Session->setFlash(__('The report task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The report task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReportTask.' . $this->ReportTask->primaryKey => $id));
			$this->request->data = $this->ReportTask->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ReportTask->id = $id;
		if (!$this->ReportTask->exists()) {
			throw new NotFoundException(__('Invalid report task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReportTask->delete()) {
			$this->Session->setFlash(__('The report task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The report task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function reporteGeneral(){
		$objConsulta= new ReporteGeneral();
		$perfil="";
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Diego Alvarado');
		$pdf->SetTitle('Reporte de Usuarios');
		$pdf->SetSubject('Reportes de Tareas Asignadas');
		$pdf->SetKeywords('Reporte,tareas, scauq, seguimiento');
	
	
	
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	
		//set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	
		//set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	
		//set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	
		//set some language-dependent strings
		//$pdf->setLanguageArray($l);
	
		// ---------------------------------------------------------
	
		// set default font subsetting mode
		$pdf->setFontSubsetting(true);
	
		$pdf->SetFont('helvetica', '', 9, '', true);
	
		// Add a page
		// This method has several options, check the source code documentation for more information.
		$pdf->setPrintHeader(false); //no imprime la cabecera ni la linea
		$pdf->setPrintFooter(true); // imprime el pie ni la linea
		$pdf->AddPage();
	
		//*************
		ob_end_clean();//rompimiento de pagina
		//*************
	
		$html = $objConsulta->reportePdfUsuarios();
		$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
	
		$pdf->Output('Reporte usuarios.pdf', 'I');
	}

	public function reporteEstadistico(){
		
		$objConsulta= new Grafica();
		$objConsulta->generarGrafica();
		
	}
	
}
