// скрипт для записи текста в документ из полей

// Обработчик для кнопки отправки вопросов
document.getElementById('submitBtn').addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('.questions__item-check');
    let isChecked = false;
    const selectedQuestions = [];

    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            isChecked = true;
            selectedQuestions.push(checkbox.value);
        }
    });

    if (!isChecked) {
        document.getElementById('responseMessage').innerText = "Пожалуйста, выберите хотя бы один вариант.";
        return; // Прекращаем выполнение функции
    }

    // Отправка данных через AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            // Выводим сообщение на странице
            document.getElementById('responseMessage').innerText = response.message;
        }
    };

    // Формируем строку для отправки
    const params = "questions[]="+selectedQuestions.join("&questions[]=");
    
    xhr.send(params); // Отправляем данные
});

// Обработчик для кнопки сохранения данных о ТВ программах (третья секция)
document.getElementById('saveBtnThird').addEventListener('click', function() {
    const tvPrograms = document.getElementById('tvProgramsThird').value;

    if (tvPrograms.length < 12) {
        document.getElementById('responseMessage').innerText = "Пожалуйста, введите минимум 12 символов.";
        return; // Прекращаем выполнение функции
    }

    // Отправка данных через AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            // Выводим сообщение на странице
            document.getElementById('responseMessage').innerText = response.message;
        }
    };

    // Формируем строку для отправки
    const params = "tvProgramsThird=" + encodeURIComponent(tvPrograms);
    
    xhr.send(params); // Отправляем данные
});

// Обработчик для кнопки сохранения данных о ТВ программах (четвертая секция)
document.getElementById('saveBtnFourth').addEventListener('click', function() {
    const tvPrograms = document.getElementById('tvProgramsFourth').value;

    if (tvPrograms.length < 12) {
        document.getElementById('responseMessage').innerText = "Пожалуйста, введите минимум 12 символов.";
        return; // Прекращаем выполнение функции
    }

    // Отправка данных через AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            // Выводим сообщение на странице
            document.getElementById('responseMessage').innerText = response.message;
        }
    };

    // Формируем строку для отправки
    const params = "tvProgramsFourth=" + encodeURIComponent(tvPrograms);
    
    xhr.send(params); // Отправляем данные
});

// Обработчик для кнопки сохранения данных о ТВ программах (пятая секция)
document.getElementById('saveBtnFifth').addEventListener('click', function() {
    const tvPrograms = document.getElementById('tvProgramsFifth').value;

    if (tvPrograms.length < 12) {
        document.getElementById('responseMessage').innerText = "Пожалуйста, введите минимум 12 символов.";
        return; // Прекращаем выполнение функции
    }

    // Отправка данных через AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            // Выводим сообщение на странице
            document.getElementById('responseMessage').innerText = response.message;
        }
    };

    // Формируем строку для отправки
    const params = "tvProgramsFifth=" + encodeURIComponent(tvPrograms);
    
    xhr.send(params); // Отправляем данные
});

// Обработчик для кнопки сохранения данных о ТВ программах (6 секция)
document.getElementById('saveBtnSixth').addEventListener('click', function() {
    const tvPrograms = document.getElementById('favoriteMoviesSixth').value;

    if (tvPrograms.length < 12) {
        document.getElementById('responseMessage').innerText = "Пожалуйста, введите минимум 12 символов.";
        return; // Прекращаем выполнение функции
    }

    // Отправка данных через AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            // Выводим сообщение на странице
            document.getElementById('responseMessage').innerText = response.message;
        }
    };

    // Формируем строку для отправки
    const params = "favoriteMoviesSixth=" + encodeURIComponent(tvPrograms);
    
    xhr.send(params); // Отправляем данные
});

    // Обработчик для кнопки сохранения данных о ТВ программах (7 секция)
    document.getElementById('saveBtnSeventh').addEventListener('click', function() {
        const tvPrograms = document.getElementById('seventhScreen').value;

        if (tvPrograms.length < 12) {
            document.getElementById('responseMessage').innerText = "Пожалуйста, введите минимум 12 символов.";
            return; // Прекращаем выполнение функции
        }

        // Отправка данных через AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                // Выводим сообщение на странице
                document.getElementById('responseMessage').innerText = response.message;
            }
        };

        // Формируем строку для отправки
        const params = "seventhScreen=" + encodeURIComponent(tvPrograms);
        
        xhr.send(params); // Отправляем данные
    });

    // Обработчик клика по кнопке
document.getElementById('saveBtnEighth').addEventListener('click', function() {
    // Получаем все чекбоксы с классом questions__item-check
    const checkboxes = document.querySelectorAll('.questions__item-check');

    // Проверяем, есть ли выбранные чекбоксы
    let isAnyChecked = false;
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            isAnyChecked = true;
        }
    });

    if (!isAnyChecked) {
        // Ни один чекбокс не выбран, показываем сообщение или просто выходим
        alert('Пожалуйста, выберите хотя бы один вариант.');
        return; // Не отправляем запрос
    }

    // Формируем массив выбранных значений
    const selectedQuestions = [];
    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            selectedQuestions.push(checkbox.value);
        }
    });

    // Создаем строку параметров для POST-запроса
    const params = selectedQuestions.map(q => 'finalquestions[]=' + encodeURIComponent(q)).join('&');

    // Отправляем AJAX-запрос
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            // Выводим сообщение на странице
            document.getElementById('responseMessage').innerText = response.message;
        }
    };

    xhr.send(params); // Отправляем данные
});

    document.querySelector('.thanks__bottom-btn').addEventListener('click', function() {
        const emailInput = document.querySelector('.thanks__bottom-mail');
        const email = emailInput.value.trim();

        if (email === "") {
            alert("Please enter your email");
            return;
        }

        // Создаем AJAX-запрос
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                
                // Можно очистить поле после успешной отправки
                emailInput.value = "";
            }
        };

        // Отправляем данные
        const params = "email=" + encodeURIComponent(email);
        xhr.send(params);
    });

// скрипт для записи текста в документ из полей

// скрипт для проверки ввода 12 символов и переключение между экранами

    //     // Обработчик события для кнопки по классу
    //     document.querySelector('.start__body-btn').addEventListener('click', function() {
    //         // Скрываем секцию вопросов
    //         document.querySelector('.first-screen').style.display = 'none';
            
    //         // Показываем секцию детального вопроса
    //         document.querySelector('.questionnaire__wrap').style.display = 'flex';
    //         document.querySelector('.second-screen').style.display = 'flex';
    //     });

    //     document.getElementById('submitBtn').addEventListener('click', function() {
    //     // Получаем все чекбоксы внутри формы
    //     const checkboxes = document.querySelectorAll('#questionsForm input[type="checkbox"]');
    //     // Проверяем, есть ли выбранные чекбоксы
    //     const isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);
        
    //     if (isAnyChecked) {
    //         // Есть выбранные — показываем третью секцию
    //         document.querySelector('.second-screen').style.display = 'none';
    //         document.querySelector('.third-screen').style.display = 'flex';
    //     } else {
    //         // Нет выбранных — показываем вторую секцию
    //         document.querySelector('.second-screen').style.display = 'flex';
    //         document.querySelector('.third-screen').style.display = 'none';
    //     }
    // });

        document.querySelector('.third-screen__btn').addEventListener('click', function() {
        // Получаем значение из поля detailed-question__field
        const detailedQuestionField = document.querySelector('.detailed-question__field');
        const inputText = detailedQuestionField.value;

        // Проверяем количество введенных символов
        if (inputText.length < 12) {
            // Если введено меньше 12 символов, ничего не делаем
            // document.querySelector('.detailed-question__warning').style.display = 'block';
            return;
        }

        // Скрываем секцию вопросов
        document.querySelector('.third-screen').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.querySelector('.fourth-screen').style.display = 'flex';
    });

        // Обработчик события для кнопки по классу
        document.querySelector('.fourth-screen__btn').addEventListener('click', function() {
            const detailedQuestionFieldFourth = document.querySelector('.detailed-question__field-fourth');
            const inputTextFourth = detailedQuestionFieldFourth.value;

        // Проверяем количество введенных символов
        if (inputTextFourth.length < 12) {
            // Если введено меньше 12 символов, ничего не делаем
            // document.querySelector('.detailed-question__warning').style.display = 'block';
            return;
        }
            // Скрываем секцию вопросов
            document.querySelector('.fourth-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.querySelector('.fifth-screen').style.display = 'flex';
        });
        // Обработчик события для кнопки по классу
        document.querySelector('.fifth-screen__btn').addEventListener('click', function() {
            // Скрываем секцию вопросов 
            const detailedQuestionFieldFifth = document.querySelector('.detailed-question__field-fifth');
            const inputTextFifth = detailedQuestionFieldFifth.value;

            // Проверяем количество введенных символов
            if (inputTextFifth.length < 12) {
                // Если введено меньше 12 символов, ничего не делаем
                // document.querySelector('.detailed-question__warning').style.display = 'block';
                return;
            }
            document.querySelector('.fifth-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.querySelector('.sixth-screen').style.display = 'flex';
        });
        document.querySelector('.sixth-screen__btn').addEventListener('click', function() {
            // Скрываем секцию вопросов detailed-question__field
            const detailedQuestionFieldSixth = document.querySelector('.detailed-question__field-sixth');
            const inputTextSixth = detailedQuestionFieldSixth.value;

            // Проверяем количество введенных символов
            if (inputTextSixth.length < 12) {
                // Если введено меньше 12 символов, ничего не делаем
                // document.querySelector('.detailed-question__warning').style.display = 'block';
                return;
            }
            document.querySelector('.sixth-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.querySelector('.seventh-screen').style.display = 'flex';
        });
        document.querySelector('.seventh-screen__btn').addEventListener('click', function() {
            // Скрываем секцию вопросов
            const detailedQuestionFieldSeventh = document.querySelector('.detailed-question__field-seventh');
            const inputTextSeventh = detailedQuestionFieldSeventh.value;

            // Проверяем количество введенных символов
            if (inputTextSeventh.length < 12) {
                // Если введено меньше 12 символов, ничего не делаем
                // document.querySelector('.detailed-question__warning').style.display = 'block';
                return;
            }
            document.querySelector('.seventh-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.querySelector('.eighth-screen').style.display = 'flex';
        });


        document.querySelector('.eighth-screen__btn').addEventListener('click', function() {
            // Получаем все чекбоксы внутри формы
            const checkboxesEighth = document.querySelectorAll('.questionsformeight input[type="checkbox"]');
            // Проверяем, есть ли выбранные чекбоксы
            const isAnyCheckedEighth = Array.from(checkboxesEighth).some(cb => cb.checked);
            
            if (isAnyCheckedEighth) {
                // Перенаправляем на thanks.php
                document.querySelector('.thanks').style.display = 'flex';
                document.querySelector('.eighth-screen').style.display = 'none';
                document.querySelector('.progress-bar').style.display = 'none';
                document.querySelector('.questionnaire__wrap').style.display = 'none';
            } else {
                // Нет выбранных — показываем секцию вопросов
                document.querySelector('.eighth-screen').style.display = 'flex';
                document.querySelector('.progress-bar').style.display = 'flex';
                document.querySelector('.questionnaire__wrap').style.display = 'flex';
                document.querySelector('.thanks').style.display = 'none';  
            }
        });

// скрипт для проверки ввода 12 символов и переключение между экранами

// // popup окно

// document.addEventListener('DOMContentLoaded', function() {
//     const btn = document.querySelector('.thanks__bottom-btn');
//     const emailInput = document.querySelector('.thanks__bottom-mail');
//     const thanksWrap = document.querySelector('.thanks__bottom-wrap'); // исходный блок
//     const popupOverlay = document.querySelector('.popup-overlay'); // оверлей

//     // Функция для проверки заполненности поля
//     function isEmailFilled() {
//         return emailInput && emailInput.value.trim() !== '';
//     }

//     // Обработчик клика по кнопке
//     btn.addEventListener('click', function() {
//         if (isEmailFilled()) {
//             // Скрываем thanks__bottom-wrap
//             if (thanksWrap) {
//                 thanksWrap.style.display = 'none';
//             }
//             // Показываем popup-overlay
//             if (popupOverlay) {
//                 popupOverlay.style.display = 'flex'; // или другой стиль, который нужен
//             }
//         } else {
//             // Можно оставить пустым или показывать сообщение
//             // alert('Пожалуйста, введите ваш email');
//         }
//     });
// });

// // popup окно