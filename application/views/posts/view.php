<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Post Details <a href="<?php echo site_url('posts/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Title:</label>
                    <p><?php echo !empty($post['title'])?$post['title']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Content:</label>
                    <p><?php echo !empty($post['content'])?$post['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <p><?php echo !empty($post['description'])?$post['description']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>URL:</label>
                    <p><?php echo !empty($post['url'])?$post['url']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Tags:</label>
                    <p><?php echo !empty($post['tags'])?$post['tags']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Keyword:</label>
                    <p><?php echo !empty($post['keyword'])?$post['keyword']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Aurthor:</label>
                    <p><?php echo !empty($post['aurthor'])?$post['aurthor']:''; ?></p>
                </div>     
            </div>
        </div>
    </div>
</div>