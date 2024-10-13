<?php
use App\Models\Book;

$authors = Book::authors();
?>

<div class="row mt-3">
    <div class="col-12 mt-3">
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>ID</th>
                <th>AUTHOR</th>
                <th>BOOKS</th>
                <th>PHOTO</th>
                <th>SETTINGS</th>
            </tr>
            <?php
            foreach($authors as $author){?>
            <tr>
                <td><?= $author->id?></td>
                <td><?= $author->author?></td>
                <td><?= $author->books?></td>
                <td><img src="/App/Views/Main/Uploads/<?= $author->photo?>" width="100px"></td>
                <td>
                    <form action="updateauthor" method="POST">
                        <input type="hidden" name="id" value="<?= $author->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-primary" style="width: 100px;">Update</button>
                    </form>
                    <form action="deleteauthor" method="POST">
                        <input type="hidden" name="id" value="<?= $author->id?>">
                        <button type="submit" name="ok" class="btn btn-outline-warning" style="width: 100px;">Delete</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        </table>

    </div>
</div>