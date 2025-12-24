
console.log('ok')

let STORAGE_KEY = document.querySelector('.key').textContent;

const form = document.getElementById('entry-form');
const entryTextarea = document.getElementById('entry-text');
const entriesList = document.getElementById('entries-list');
const messageStatus = document.getElementById('message-status');
const clearButton = document.getElementById('clear-all-button');

function loadNotes() {
    const json = localStorage.getItem(STORAGE_KEY);
    try {
        return json ? JSON.parse(json) : [];
    } catch (e) {
        console.error("Ошибка парсинга данных из localStorage:", e);
        return [];
    }
}

function saveNotes(notes) {
    try {
        const json = JSON.stringify(notes);
        localStorage.setItem(STORAGE_KEY, json);
        messageStatus.textContent = "Заметки сохранены в браузере!";
        messageStatus.className = 'mt-3 text-center small fw-medium text-success';
    } catch (e) {
        console.error("Ошибка сохранения данных в localStorage:", e);
        messageStatus.textContent = "Ошибка сохранения! Возможно, хранилище заполнено.";
        messageStatus.className = 'mt-3 text-center small fw-medium text-danger';
    }
}

function addNote(text) {
    const notes = loadNotes();
    const newNote = {
        id: Date.now(),
        text: text,
        createdAt: new Date().toLocaleString('ru-RU')
    };

    notes.unshift(newNote); 
    saveNotes(notes);
    renderNotes(notes);
    entryTextarea.value = '';
}

function deleteNote(id) {
    const notes = loadNotes();
    const updatedNotes = notes.filter(note => note.id !== id);

    if (updatedNotes.length < notes.length) {
        saveNotes(updatedNotes);
        renderNotes(updatedNotes);
    }
}


function clearAllNotes() {
    localStorage.removeItem(STORAGE_KEY);
    messageStatus.textContent = "Все заметки были удалены из вашего браузера.";
    messageStatus.className = 'mt-3 text-center small fw-medium text-danger';
    renderNotes([]);
}


function renderNotes(entries) {
    entriesList.innerHTML = ''; 

    if (entries.length === 0) {
        entriesList.innerHTML = '<p class="text-center text-secondary p-4 bg-white rounded-3 shadow-sm">Заметок пока нет. Добавьте свою первую запись!</p>';
        clearButton.classList.add('d-none');
        return;
    }
    
    clearButton.classList.remove('d-none');

    entries.forEach(entry => {
        const entryElement = document.createElement('div');
        entryElement.className = `note-card card bg-white rounded-3 shadow-sm p-3 d-flex flex-row justify-content-between align-items-start`;
        
        entryElement.innerHTML = `
            <div class="flex-grow-1 me-3">
                <p class="small fw-semibold text-primary mb-1">
                    Записано: ${entry.createdAt}
                </p>
                <p class="text-dark mb-0 whitespace-pre-wrap">${entry.text}</p>
            </div>
            <!-- Кнопка удаления -->
            <button data-id="${entry.id}" class="delete-btn btn btn-sm btn-outline-danger border-0 flex-shrink-0" title="Удалить заметку">
                <svg class="w-4 h-4" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </button>
        `;
        entriesList.appendChild(entryElement);
    });
    
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.currentTarget.getAttribute('data-id'));
            deleteNote(id);
        });
    });
}







form.addEventListener('submit', (e) => {
    e.preventDefault();
    const text = entryTextarea.value.trim();
    if (text) {
        addNote(text);
    } else {
        messageStatus.textContent = "Пожалуйста, введите текст сообщения.";
        messageStatus.className = 'mt-3 text-center small fw-medium text-danger';
    }
});

clearButton.addEventListener('click', () => {
     const confirmationMessage = "Вы уверены, что хотите удалить ВСЕ заметки? Это действие необратимо.";
     if (window.confirm(confirmationMessage)) { 
         clearAllNotes();
     } else {
         messageStatus.textContent = "Удаление отменено.";
         messageStatus.className = 'mt-3 text-center small fw-medium text-secondary';
     }
});

window.onload = () => {
    const notes = loadNotes();
    renderNotes(notes);
};