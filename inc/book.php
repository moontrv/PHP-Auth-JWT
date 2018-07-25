        <div class="media well">
            <?php if (isAuthenticated()): ?>
            <div class="media-left">
                <div class="btn-group-vertical" role="group">
                    <a href="<?php echo $base_url; ?>/procedures/vote.php?vote=up&bookId=<?php echo $book['id']; ?>">
                    <span class="glyphicon glyphicon-triangle-top" <?php if ($book['myVote'] == 1) echo 'style="color:orange"'; ?>></span></a>
                    <span><?php if (isset($book['score'])) echo $book['score']; else echo '0'; ?></span>
                    <a href="<?php echo $base_url; ?>/procedures/vote.php?vote=down&bookId=<?php echo $book['id']; ?>">
                    <span class="glyphicon glyphicon-triangle-bottom" <?php if ($book['myVote'] == -1) echo 'style="color:orange"'; ?>></span></a>
                </div>
            </div>
            <?php endif; ?>
            <div class="media-body">
              <h4 class="media-heading"><?php echo $book['name']; ?></h4>
              <p><?php echo $book['description']; ?></p>
                <?php if (isAuthenticated() && (isOwner($book['owner_id']) || isAdmin())): ?>
                <p>
                <span><a href="<?php echo $base_url; ?>/edit.php?bookId=<?php echo $book['id']; ?>">Edit</a> | </span>
                <span><a href="<?php echo $base_url; ?>/procedures/deleteBook.php?bookId=<?php echo $book['id']; ?>">Delete</a></span>
                </p>
                <?php endif; ?>
            </div>
        </div>