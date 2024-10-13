<?php
use App\Models\Book;

$genres = Book::genres();
?>

<div class="row mt-3">
    <div class="col-12 mt-3">
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>#</th>
                <th>GENRE</th>
                <th>BOOKS</th>
                <th>SETTINGS</th>
            </tr>
            <?php
            $a = 1;
            foreach($genres as $genre){?>
            <tr>
                <td><?= $a?></td>
                <td><?= $genre->genre?></td>
                <td><?= $genre->books?></td>
                <td>
                    <form action="#" method="POST">
                        <input type="hidden" name="id" value="<?= $genre->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-primary" style="width: 100px;">Update</button>
                    </form>
                    <form action="deletegenre" method="POST">
                        <input type="hidden" name="id" value="<?= $genre->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-warning" style="width: 100px;">Delete</button>
                    </form>
                </td>
            </tr>
            <?php 
            $a +=1; }?>
        </table>

    </div>
</div>