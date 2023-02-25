<?php

require_once "config/connection.php";        

if ($_SERVER["REQUEST_METHOD"] == "GET"):
    if ($action=='fetchPost1'):
        $db = new Database();
        $postCount=0;
        $data = $db->get_results("SELECT usertab.userPicture, chattab.chatText,chattab.chatVideo,chattab.chatImage FROM chattab LEFT JOIN usertab ON chattab.userId=usertab.userId WHERE postId='1'")or die ('Unable to save chat!');
        while($row = $data -> fetch_assoc()):
        $chatText = $row['chatText'];
        $chatImage = $row['chatImage'];
        $chatVideo = $row['chatVideo'];
        $chatDate = $row['chatDate'];
        $userPicture = $row['userPicture'];
        $postCount++;
        ?>
            <div class="message anim" style="--delay: .<?php echo $postCount ?>s">
                <div class="author-img__wrapper video-author video-p">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                    <path d="M20 6L9 17l-5-5" />
                    </svg>
                    <img class="author-img" src="asset/img/<?php echo $userPicture ?>" />
                </div>
                <div class="msg-wrapper">
                    <div class="msg__name video-p-name offline">Johny Wise</div>
                    <div class="msg__content video-p-sub"> <?php echo $chatText ?></div>
                </div>
            </div>
        <?php
        endwhile;
    endif;
endif;

class postController {
    function _fetchPost1(){   
        $db = new Database();
        $data = $db->get_results("SELECT * FROM `posttab` LIMIT 4")or die ('Unable to save chat!');
        while($row = $data -> fetch_assoc()):
            $postAuthor = $row['postAuthor'];
            $postTitle = $row['postTitle'];
            $postViews = $row['postViews'];
            $postImage = $row['postImage'];
            $postVideo = $row['postVideo'];
            $postUploadDate = $row['postUploadDate'];
            $postDate = $row['postDate'];
            ?>
            <div class="video anim" style="--delay: .4s">
                <div class="video-time"><?php echo $postUploadDate ?></div>
                <div class="video-wrapper">
                <!-- <video muted="">
                <source src="asset/video/<?php echo $postVideo ?>" type="video/mp4">
                </video> -->
                <iframe width="100" height="200" src="https://www.youtube.com/embed/6F9qCI61t3g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <div class="author-img__wrapper video-author">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                    <path d="M20 6L9 17l-5-5" />
                </svg>
                <img class="author-img" src="asset/img/<?php echo $postImage ?>" />
                </div>
                </div>
                <div class="video-by"><?php echo $postAuthor  ?></div>
                <div class="video-name"><?php echo $postTitle  ?></div>
                <div class="video-view"><?php echo $postViews  ?><span class="seperate video-seperate"></span><?php echo $postDate ?></div>
            </div>
        <?php
        endwhile;
    }
    function _fetchPost2(){   
        
    }       
 
}
$callNewPostController = new postController();