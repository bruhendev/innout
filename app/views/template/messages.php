<?php
$errors = [];

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

elseif ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) === "ValidationException") {
        $errors = $exception->getErrors();
    }
}

$alertType = '';
if (isset($message)) {
    if ($message['type'] === 'error') {
        $alertType = 'danger';
    } else {
        $alertType = 'success';
    }
}
?>

<?php if (isset($message)): ?>
    <div role="alert" class="alert alert-<?= $alertType ?>">
        <?= $message['message'] ?>
    </div>
<?php endif ?>