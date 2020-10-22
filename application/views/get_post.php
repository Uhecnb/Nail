
<section class="blog-content-area section-padding-100">
    <div class="container">
        <form action="" method="POST" id="form">
            <select name="id">
                <?php foreach ($data['all_posts'] as $post): ?>
                    <option value="<?= $post['id'] ?>"><?= $post['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <input type="button" id="submit" value="Получить">
        </form>
        <div id="result_form"></div>
    </div>
</section>