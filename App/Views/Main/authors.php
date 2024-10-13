<?php
use App\Models\Book;

$authors = Book::authors();
?>

<div class="row mt-3">
    <div class="col-12 mt-3">
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>#</th>
                <th>AUTHOR</th>
                <th>BOOKS</th>
                <th>SETTINGS</th>
            </tr>
            <?php
            $a = 1;
            foreach($authors as $author){?>
            <tr>
                <td><?= $a?></td>
                <td><?= $author->author?></td>
                <td><?= $author->books?></td>
                <td>
                    <form action="#" method="POST">
                        <input type="hidden" name="id" value="<?= $author->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-primary" style="width: 100px;">Update</button>
                    </form>
                    <form action="deleteauthor" method="POST">
                        <input type="hidden" name="id" value="<?= $author->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-warning" style="width: 100px;">Delete</button>
                    </form>
                </td>
            </tr>
            <?php 
            $a +=1; }?>
        </table>

    </div>
</div>