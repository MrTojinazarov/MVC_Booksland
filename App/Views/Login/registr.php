<div class="row mt-3">
    <div class="col-8 offset-2 mt-3">
        <form action="/registr" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Login</label>
                <input type="email" class="form-control" name="email" id="name" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="col-2 offset-5">
                <button type="submit" name="ok" class="btn btn-outline-warning" style="width: 100px;">Save</button>
            </div>
        </form>
    </div>
</div>