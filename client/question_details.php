<div class = "container">
<h1 class="heading">Question</h1>
<div class="row">
        <div class="col-8">
            <?php
            include("./common/db.php");
            $query = "select * from questions where id =$qid";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $cid = $row['category_id'];
            echo "<h4 class='margin_bottom_15 question-title'>Question : " . $row['title'] . "</h4>
            <p class='margin_bottom_15'>" . $row['description'] . "</p>";
            include_once("answer.php");
            ?>
            <form action="./server/requests.php" method="post">
                <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                <textarea name="answer" class="form-control margin_bottom_15" placeholder="Your answer..."></textarea>
                <button class="btn btn-primary">Write your answer</button>
            </form>
</div>
</div>
</div>
