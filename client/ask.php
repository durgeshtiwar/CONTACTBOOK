<div class="container">
<h1 class="heading">Ask A Question </h1>

<form action="./server/requests.php" method="post">

  <div class="col-6 offset-sm-3 margin_bottom_15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter question">
  </div>

  <div class="col-6 offset-sm-3 margin_bottom_15">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter question"></textarea>
  </div>

  <div class="col-6 offset-sm-3 margin_bottom_15">
    <label for="category" class="form-label ">Category</label>
    <select class="form-control" name="category" id="category">
      <option value="">mobile</option>
      <option value="">kuch bhi</option>
      <option value="">coding</option>
    </select>
  </div>
  <div class="col-6 offset-sm-3 margin_bottom_15">
  <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>

  </div>

</form>

</div>