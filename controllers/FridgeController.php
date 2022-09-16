<?php

use RedBeanPHP\R as R;

class FridgeController extends BaseController
{
    public function new ()
    {
        $products = R::getAll('SELECT * FROM newfridge');
        
        $data = [
            'products' => $products
        ];

        displayTemplate('fridge/new.html', $data);
    }

    public function addNew()
    {
        displayTemplate('fridge/addnew.html', []);
    }

    public function addNewPost()
    {
        $fridge = R::dispense('newfridge');

        $fridge->naam = $_POST['naam'];
        $fridge->image = $_POST['image'];
        $fridge->prijs = $_POST['prijs'];
        $fridge->artikelnummer = $_POST['artikelnummer'];
        $fridge->beschrijving = $_POST['beschrijving'];

        R::store($fridge);

        if ($_POST['beschrijving'] != null) {
            $posted = 'mooi';
        } else {
            $posted = null;
        }
        
        $products = R::getAll('SELECT * FROM newfridge');

        $data = [
            'posted' => $posted,
            'products' => $products
        ];

        displayTemplate('fridge/new.html', $data);
    }

    public function editNew()
    {
        $ID = $_POST['id'];
        $product = R::getRow("SELECT * FROM newfridge WHERE id = $ID");

        $data = [
            'product' => $product,
            'id' => $_POST['id']
        ];
        
        displayTemplate('fridge/editnew.html', $data);
    }

    public function editNewPost()
    {
        $fridge = R::dispense('newfridge');

        $fridge->id = $_POST['id'];
        $fridge->naam = $_POST['naam'];
        $fridge->image = $_POST['image'];
        $fridge->prijs = $_POST['prijs'];
        $fridge->artikelnummer = $_POST['artikelnummer'];
        $fridge->beschrijving = $_POST['beschrijving'];

        R::store($fridge);

        if ($_POST['beschrijving'] != null) {
            $posted = 'mooi';
        } else {
            $posted = null;
        }

        $products = R::getAll('SELECT * FROM newfridge');
        
        $data = [
            'edited' => $posted,
            'products' => $products
        ];
        displayTemplate('fridge/new.html', $data);
    }

    public function deleteNew()
    {
        $fridge = $this->getBeanById('newfridge', $_POST['id']);
        R::trash($fridge);

        $products = R::getAll('SELECT * FROM newfridge');

        $data = [
            'deleted' => 'deleted',
            'products' => $products
        ];

        displayTemplate('fridge/new.html', $data);
    }

    public function used()
    {
        $products = R::getAll('SELECT * FROM usedfridge');
        
        $data = [
            'products' => $products
        ];

        displayTemplate('fridge/used.html', $data);
    }

    public function addUsed()
    {
        displayTemplate('fridge/addUsed.html', []);
    }

    public function addUsedPost()
    {
        $fridge = R::dispense('usedfridge');

        $fridge->naam = $_POST['naam'];
        $fridge->image = $_POST['image'];
        $fridge->prijs = $_POST['prijs'];
        $fridge->staat = $_POST['staat'];
        $fridge->artikelnummer = $_POST['artikelnummer'];        
        $fridge->beschrijving = $_POST['beschrijving'];

        R::store($fridge);

        if ($_POST['beschrijving'] != null) {
            $posted = 'mooi';
        } else {
            $posted = null;
        }

        $products = R::getAll('SELECT * FROM usedfridge');
        
        $data = [
            'posted' => $posted,
            'products' => $products
        ];

        displayTemplate('fridge/used.html', $data);
    }

    public function editUsed()
    {
        $ID = $_POST['id'];
        $product = R::getRow("SELECT * FROM usedfridge WHERE id = $ID");

        $data = [
            'product' => $product
        ];
        
        displayTemplate('fridge/editused.html', $data);
    }

    public function editusedPost()
    {
        $fridge = R::dispense('usedfridge');

        $fridge->id = $_POST['id'];
        $fridge->naam = $_POST['naam'];
        $fridge->image = $_POST['image'];
        $fridge->prijs = $_POST['prijs'];
        $fridge->staat = $_POST['staat'];
        $fridge->artikelnummer = $_POST['artikelnummer'];
        $fridge->beschrijving = $_POST['beschrijving'];

        R::store($fridge);

        $posted = 'mooi';
        $products = R::getAll('SELECT * FROM usedfridge');
        
        $data = [
            'edited' => $posted,
            'products' => $products
        ];
        displayTemplate('fridge/used.html', $data);
    }

    public function deleteUsed()
    {
        $fridge = $this->getBeanById('usedfridge', $_POST['id']);
        R::trash($fridge);

        $products = R::getAll('SELECT * FROM usedfridge');

        $data = [
            'deleted' => 'deleted',
            'products' => $products
        ];

        displayTemplate('fridge/used.html', $data);
    }
}