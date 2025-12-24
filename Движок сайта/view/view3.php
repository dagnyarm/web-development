<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .note-card {
            border-left: 5px solid #0d6efd;
            transition: all 0.3s ease;
        }
        .note-card:hover {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
    </style>
</head>
<body class="p-3">

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <h1 class="display-5 fw-bold text-dark mb-4 border-bottom border-primary pb-2 key">Рубрика 2</h1>
                <p class="text-secondary mb-4">Все заметки хранятся в вашем браузере с помощью localStorage</p>

                <section id="add-entry" class="card shadow-lg mb-5 border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="card-title h4 fw-bold text-dark mb-4">Добавить новую заметку</h2>
                        <form id="entry-form">
                            <div class="mb-3">
                                <label for="entry-text" class="form-label fw-medium text-secondary">Текст заметки</label>
                                <textarea id="entry-text" required class="form-control rounded-3" placeholder="Что нужно записать?"></textarea>
                            </div>
                            <button type="submit" id="submit-button" class="btn btn-primary btn-lg w-100 rounded-3 shadow-sm">Сохранить заметку</button>
                        </form>
                        <p id="message-status" class="mt-3 text-center small fw-medium"></p>
                    </div>
                </section>

                <section>
                    <h2 class="h4 fw-bold text-dark mb-3 border-bottom pb-2">Мои заметки</h2>
                    <div id="entries-list" class="d-grid gap-3">
                        <p class="text-center text-secondary p-4 bg-white rounded-3 shadow-sm">Загрузка заметок...</p>
                    </div>
                    <button id="clear-all-button" class="mt-4 btn btn-outline-danger btn-sm w-100 rounded-3">Удалить все записи</button>
                </section>

            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"</script>
    


</body>
</html>