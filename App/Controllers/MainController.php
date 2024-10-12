<?php

namespace App\Controllers;

use App\Models\Book;

class MainController
{

    public function index()
    {
        return view('Main/index', 'All Books');
    }

    public function authors()
    {
        return view('Main/authors', 'Authors');
    }

    public function genre()
    {
        return view('Main/genre', 'Genres');
    }

    public function addBooks()
    {
        return view("Main/addBooks", "Add Book");
    }

    public function addNewBook()
    {
        if (isset($_POST['ok'])) {
            if (!empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['title']) && !empty($_FILES['photo'])) {

                $photo = explode('.', $_FILES['photo']['name']);
                $photoPath = date('Y-m-d_H-i-s_') . '.' . $photo[1];
                move_uploaded_file($_FILES['photo']['tmp_name'], 'App/Views/Main/Uploads/' . $photoPath);


                $data = [
                    'name' => $_POST['name'],
                    'author' => $_POST['author'],
                    'title' => $_POST['title'],
                ];

                Book::create($data);
                header("Location: /");

            }
        }
    }
}
