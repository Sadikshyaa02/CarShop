<?php

class newsController{

    private $news;

	public function __construct($news) {
		$this->news = $news;
	}

public function home() {

	//show all news
		$stories = $this->news->findAll();

		return [
			'template' => 'index.html.php',
            'title' => 'Home',
			'variables' => [
                'news' => $stories
            ]
		];

}

    public function about() {

		//about page

		return [
			'template' => 'about.html.php',
            'title' => 'About',
            'variables' => []
		];

	}

	public function add(){

		if (isset($_POST['submit'])) {

			//add new story
			$criteria = [
				'title' => $_POST['title'],
				'content' => $_POST['content'],
				'date' => date('Y/m/d'),
				'author' => $_SESSION['name']
			];
	
			$story = $this->news->save($criteria);
	
			if ($_FILES['image']['error'] == 0) {
				$pdo = new PDO('mysql:dbname=mysql;host=mysql', 'student' , 'student');

				$story = $this->news->findId();
				$fileName = $story . '.jpg';
				move_uploaded_file($_FILES['image']['tmp_name'], '../public/images/news/' . $fileName);
			}

			$var = ['var' => 'News Added'];
			$template = 'added.html.php';
		}
		else {
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				$var = [];
				$template = 'addnews.html.php';
			}
			else {
				$var = [];
				$template = 'index2.html.php';
			}
		}

		return [
			'template' => $template,
			'title' => 'Add News',
			'variables' => $var
		];

	}

	public function delete(){

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	//delete story
			$stories = $this->news->delete($_POST['id']);
			$template = 'added.html.php';
			$var = ['var' => 'News Deleted'];
		}
		else {
			$template = 'index2.html.php';
			$var = [];
		}
		
		return [
			'template' => $template,
			'title' => 'Delete News',
			'variables' => $var
		];
	}

public function admin(){

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		//show all stories
		$stories = $this->news->findAll();
		$template = 'news.html.php';
		$var = ['news' => $stories];
	}

	else {
		$template = 'index2.html.php';
		$var = [];
	}

	return [
		'template' => $template,
		'title' => 'News',
		'variables' => $var
	];

}


}    

?>



<?php

//class neWsController is made
class newsController{

    private $news;

	public function __construct($news) {
		$this->news = $news;
	}

public function home() {

	//shoWiNg all news
		$stories = $this->news->findAll();


		//RetUrnIng sTmT
		return [

			//teMplAte fOr neXt page
			'template' => 'index.php',

			//seTTinG the TitLe
            'title' => 'Home',

			//sETTinG the VariaBle
			'variables' => [
                'news' => $stories
            ]
		];

}


//funC for AboUt paGe
    public function about() {

		//about page

		//returnInG the Template
		return [
			'template' => 'about.php',
            'title' => 'About',
            'variables' => []
		];

	}


	//funC for AdDing
	public function add(){

		if (isset($_POST['submit'])) {

			//addInG nEwW story
			$sadicriteria = [

				//sEttInG the CriTerIa
				'title' => $_POST['title'],
				'content' => $_POST['content'],
				'date' => date('Y/m/d'),
				'author' => $_SESSION['name']
			];
	

			//SaVing  the StoRy
			$story = $this->news->save($sadicriteria);
	
			if ($_FILES['image']['error'] == 0) {

				//cOnnEctiNg to daTaBaSe
				$pdo = new PDO('mysql:dbname=mysql;host=mysql', 'student' , 'student');

				$story = $this->news->findId();

				//upLoading  the imAgE
				$fileName = $story . '.jpg';
				move_uploaded_file($_FILES['image']['tmp_name'], '../public/images/news/' . $fileName);
			}


			//seTTing Variable
			$sadivar = ['var' => 'News Added'];

			//templAte for neXt page
			$saditemplate = 'added.php';
		}
		else {

			//WhEn logged In
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

				//VarIaBle 
				$sadivar = [];

				//SeTTinG the tEmplAtE
				$saditemplate = 'addnews.php';
			}
			else {

				//vAriAble
				$sadivar = [];

				//sEttInG the teMplate
				$saditemplate = 'index2.php';
			}
		}


		//returninG sTmT
		return [
			'template' => $saditemplate,
			'title' => 'Add News',
			'variables' => $sadivar
		];

	}


	//FunctiOn for DeleTing
	public function delete(){

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	//deletinG story
			$stories = $this->news->delete($_POST['id']);

			//sEttInG the TemPlate 
			$saditemplate = 'added.php';

			//SettIng the VariablE
			$sadivar = ['var' => 'News Deleted'];
		}
		else {

			//sEttInG the TemPlate 
			$saditemplate = 'index2.php';

			//SettIng the VariablE
			$sadivar = [];
		}
		
		return [
			//sEttInG the TemPlate 
			'template' => $saditemplate,

			//sEttInG the TiTlE 
			'title' => 'Delete News',

			//SettIng the VariablE
			'variables' => $sadivar
		];
	}


	//makiNg FunC foR aDmin
public function admin(){

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		//showinG all storIEs
		$stories = $this->news->findAll();

		//sEttInG the TemPlate 
		$saditemplate = 'news.php';

		//SettIng the VariablE
		$sadivar = ['news' => $stories];
	}

	else {

		//sEttInG the TemPlate
		$saditemplate = 'index2.php';

		//SettIng the VariablE
		$sadivar = [];
	}

	return [

		//sEttInG the TemPlate
		'template' => $saditemplate,

		//sEttInG the TiTle
		'title' => 'News',
		//SettIng the VariablE
		'variables' => $sadivar
	];

}


}    

?>












