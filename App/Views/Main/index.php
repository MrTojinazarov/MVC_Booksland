<?php
use App\Models\Book;
$books = Book::getAll();
?>

<div class="row mt-3">
    <div class="col-12">
        <a href="addBooks" class="btn btn-outline-primary">Add Book</a>
    </div>
    <div class="col-12 mt-3">

        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AUTHOR</th>
                <th>GENRE</th>
                <th>TITLE</th>
                <th>PHOTO</th>
                <th>SETTINGS</th>
            </tr>
            <?php
            foreach($books as $book){?>
            <tr>
                <td><?= $book->id?></td>
                <td><?= $book->name?></td>
                <td><?= $book->author?></td>
                <td><?= $book->genre?></td>
                <td><?= $book->title?></td>
                <td><img src="/App/Views/Main/Uploads/<?= $book->photo?>" width="100px"></td>
                <td>
                    <form action="updateBook" method="POST">
                        <input type="hidden" name="id" value="<?= $book->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-primary" style="width: 100px;">Update</button>
                    </form>
                    <form action="deleteBook" method="POST">
                        <input type="hidden" name="id" value="<?= $book->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-warning" style="width: 100px;">Delete</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

    </div>
</div>