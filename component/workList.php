<!-- workList.php start -->
    <h3 class="works__Title">
        <?php echo $worksTitle; ?> <!-- タイトル -->
    </h3>
    <a class="works__link" href="<?php echo $url; ?>"> <!-- リンク -->
        <span class="works__linkArea">
            <img class="works__pic" src="./images/<?php echo $image; ?>" alt="<?php echo $alt; ?>"> <!-- 画像 -->
        </span>
    </a>
    <div class="works__explanationArea">
        <h4 class="works__explanationTitle">作品内容</h4>
        <p class="works__explanation">
            <?php echo $workExplanation; ?><!-- 作品内容 -->
        </p>
        <h4 class="works__explanationTitle">使用スキル</h4>
        <p class="works__explanation">
            <?php echo $workSkill; ?><!-- 使用スキル -->
        </p>
        <h4 class="works__explanationTitle">担当範囲</h4>
        <p class="works__explanation">
            <?php echo $workRange; ?><!-- 担当範囲 -->
        </p>
    </div>
<!-- workList.php end -->