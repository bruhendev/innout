<?php
if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}
?>

<?php if (isset($message)): ?>
    <div class="alert alert-danger">
        <?= $message['message'] ?>
    </div>
<?php endif ?>