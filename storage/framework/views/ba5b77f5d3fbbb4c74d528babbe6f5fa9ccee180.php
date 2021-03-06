<?php $__env->startSection('content'); ?>

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5"><?php echo e(isset($title) ? $title : 'Question'); ?></h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="<?php echo route('questions.question.destroy', $question->id); ?>" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            <?php echo e(csrf_field()); ?>

                <div class="btn-group btn-group-sm" role="group">
                    <a href="<?php echo e(route('questions.question.index')); ?>" class="btn btn-primary" title="Show All Question">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="<?php echo e(route('questions.question.create')); ?>" class="btn btn-success" title="Create New Question">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="<?php echo e(route('questions.question.edit', $question->id )); ?>" class="btn btn-primary" title="Edit Question">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Question" onclick="return confirm(&quot;Delete Question??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Enonce</dt>
            <dd><?php echo e($question->enonce); ?></dd>
            <dt>Created At</dt>
            <dd><?php echo e($question->created_at); ?></dd>
            <dt>Updated At</dt>
            <dd><?php echo e($question->updated_at); ?></dd>

        </dl>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.defaults', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>