<?php

namespace App\Controllers;

use App\Models\Book;

class MainController
{
    public function __construct()
    {
        // dd(123);
        layout("Main/main");
    }
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
            if (!empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['genre']) && !empty($_POST['title']) && !empty($_FILES['photo'])) {

                $photo = explode('.', $_FILES['photo']['name']);
                $photoPath = date('Y-m-d_H-i-s_') . '.' . $photo[1];
                move_uploaded_file($_FILES['photo']['tmp_name'], 'App/Views/Main/Uploads/' . $photoPath);


                $data = [
                    'name' => $_POST['name'],
                    'author' => $_POST['author'],
                    'genre' => $_POST['genre'],
                    'title' => $_POST['title'],
                    'photo' => $photoPath
                ];

                Book::create($data);
                header("Location: /");
            }
        }
    }

    public static function updateBook()
    {
        if (isset($_POST['ok']) && !empty($_POST['id'])) {
            $id = $_POST['id'];

            $data = Book::getUserById($id);
            return view("Main/updateBook", "Update Book", $data);
        }
    }

    public static function update()
    {
        if (isset($_POST['ok'])) {
            if (!empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['genre']) && !empty($_POST['title']) && !empty($_POST['id']) && isset($_POST['old_photo'])) {

                $id = $_POST['id'];

                if (!empty($_FILES['photo']['name'])) {
                    $photo = $_FILES['photo'];
                    $data = explode('.', $photo['name']);
                    $filepath = date('Y-m-d_H-i-s_') . '.' . end($data);

                    if (move_uploaded_file($photo['tmp_name'], 'App/Views/Main/Uploads/' . $filepath)) {
                        $data = [
                            'id' => htmlspecialchars(strip_tags($id)),
                            'name' => htmlspecialchars(strip_tags($_POST['name'])),
                            'author' => htmlspecialchars(strip_tags($_POST['author'])),
                            'genre' => htmlspecialchars(strip_tags($_POST['genre'])),
                            'title' => htmlspecialchars(strip_tags($_POST['title'])),
                            'photo' => $filepath
                        ];
                    } else {
                        echo "Rasmni yuklashda xato.";
                        exit;
                    }
                } else {
                    $data = [
                        'id' => htmlspecialchars(strip_tags($id)),
                        'name' => htmlspecialchars(strip_tags($_POST['name'])),
                        'author' => htmlspecialchars(strip_tags($_POST['author'])),
                        'genre' => htmlspecialchars(strip_tags($_POST['genre'])),
                        'title' => htmlspecialchars(strip_tags($_POST['title'])),
                        'photo' => htmlspecialchars(strip_tags($_POST['old_photo']))
                    ];
                }

                if (Book::update($data, $id)) {
                    header("Location: /");
                    exit;
                } else {
                    echo "Yangilanishda xato.";
                }
            } else {
                echo "Barcha maydonlarni to'ldiring.";
            }
        }
    }

    public static function deleteBook()
    {
        if(isset($_POST['id'])){
            $id = $_POST['id'];

            Book::delete($id);
            header("Location: /");
        }
    }
}
