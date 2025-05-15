<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <title>Document</title>
    <script>
        function generateRandomTicketNumber(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // Латиница и цифры
            let result = '';
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                result += characters[randomIndex];
            }
            return result;
        }
    
        document.addEventListener('DOMContentLoaded', function() {
            const ticketNumberElement = document.querySelector('.ticket__number-text');
            const randomTicketNumber = generateRandomTicketNumber(7); // Генерируем 7 символов
            ticketNumberElement.textContent = randomTicketNumber; // Устанавливаем сгенерированный номер
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const questionsItems = document.querySelectorAll('.questions__item');
    
            questionsItems.forEach(item => {
                const checkbox = item.querySelector('.questions__item-check');
                const label = item.querySelector('.questions__item-text');
    
                // Функция для переключения класса
                function toggleActiveClass() {
                    // Убираем класс у всех элементов
                    questionsItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherCheckbox = otherItem.querySelector('.questions__item-check');
                            otherCheckbox.checked = false; // Снимаем отметку с других чекбоксов
                            otherItem.classList.remove('questions__item-active'); // Удаляем класс активного состояния
                        }
                    });
    
                    // Переключаем класс для текущего элемента
                    item.classList.toggle('questions__item-active', checkbox.checked);
                }
    
                // Добавляем обработчики событий на чекбокс и метку
                checkbox.addEventListener('change', toggleActiveClass); // Используем 'change' для чекбокса
                label.addEventListener('click', toggleActiveClass); // 'click' для метки
            });
        });
    </script>
</head>
<body>
    <!-- <section class="start first-screen" id="first-screen">
        <div class="start__container container">
            <a href="" class="start__logo">
                <img src="img/logo.svg" alt="logo" class="start__logo-img">
            </a>
            <div class="start__body">
                <p class="start__body-description">भारत के स्वास्थ्य मंत्रालय द्वारा अंतरराष्ट्रीय मूत्र रोग विशेषज्ञ संघों के सहयोग से आयोजित वार्षिक पुरुष स्वास्थ्य सर्वेक्षण</p>
                <p class="start__body-description_bold">संक्षिप्त सर्वेक्षण पूरा करें और कुल $346 मूल्य के 3 बोनस सुनिश्चित रूप से प्राप्त करें, साथ ही 3 नई Toyota Camry XSE कारों के लकी ड्रा में स्वचालित रूप से भाग लें।</p>
                <button id="submitBtn" class="start__body-btn btn">Start</button>
            </div>
            <div class="start__bottom">
                <div class="start__bottom-text">© 2025. All rights reserved.</div>
                <a href="" class="start__bottom-link">Privacy Policy</a>
                <a href="" class="start__bottom-link">Terms of Use</a>
                <a href="" class="start__bottom-link">Contact Us</a>
            </div>
        </div>
    </section> -->
    <div class="progress-bar">
        <div class="progress-bar__item progress-bar__item-active">
            <span class="progress-bar__item-stage"></span>
        </div>
        <div class="progress-bar__item"><span class="progress-bar__item-stage"></span></div>
        <div class="progress-bar__item"><span class="progress-bar__item-stage"></span></div>
        <div class="progress-bar__item"><span class="progress-bar__item-stage"></span></div>
        <div class="progress-bar__item"><span class="progress-bar__item-stage"></span></div>
        <div class="progress-bar__item"><span class="progress-bar__item-stage"></span></div>
        <div class="progress-bar__item"></div>
    </div>
    <section class="questions second-screen" id="questionsSection">
        <div class="questions__first-screen">
            <div class="questions__container container">
                <div class="questions__title title">आप स्वास्थ्य संबंधी जानकारी कहाँ खोजते हैं?</div>
                <form id="questionsForm" class="questionsForm">
                    <div class="questions__item">
                        <input type="checkbox" name="questions[]" class="questions__item-check" id="item1" value="फोरम और मेडिकल वेबसाइट्स">
                        <label class="questions__item-text" for="item1">फोरम और मेडिकल वेबसाइट्स</label>
                    </div>
                    <div class="questions__item">
                        <input type="checkbox" name="questions[]" class="questions__item-check" id="item2" value="गूगल, यूट्यूब">
                        <label class="questions__item-text" for="item2">गूगल, यूट्यूब</label>
                    </div>
                    <div class="questions__item">
                        <input type="checkbox" name="questions[]" class="questions__item-check" id="item3" value="फेसबुक">
                        <label class="questions__item-text" for="item3">फेसबुक</label>
                    </div>
                    <div class="questions__item">
                        <input type="checkbox" name="questions[]" class="questions__item-check" id="item4" value="टेलीविज़न">
                        <label class="questions__item-text" for="item4">टेलीविज़न</label>
                    </div>
                    <div class="questions__item">
                        <input type="checkbox" name="questions[]" class="questions__item-check" id="item5" value="दोस्त और जान-पहचान वाले">
                        <label class="questions__item-text" for="item5">दोस्त और जान-पहचान वाले</label>
                    </div>
                    <button type="button" id="submitBtn" class="questions__btn second-screen__btn btn">Next question</button>
                </form>
            </div>
        </div>
    </section>

    <section class="detailed-question third-screen" id="third-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">आप कौन से टीवी प्रोग्राम या शो देखना पसंद करते हैं?</div>
            <div class="detailed-question__body">
            <textarea name="tvPrograms" id="tvProgramsThird" class="detailed-question__field" placeholder="वो टीवी प्रोग्राम या शो लिखें, जो आप सबसे ज़्यादा देखते हैं"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
            </div>
            <button id="saveBtnThird" class="detailed-question__btn third-screen__btn btn">Next question</button>
        </div>
    </section>

<section class="detailed-question fourth-screen" id="fourth-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">क्या आपके पसंदीदा टीवी होस्ट या अभिनेता हैं? अगर हां, तो उनके नाम बताएं</div>
        <div class="detailed-question__body">
            <textarea name="tvPrograms" id="tvProgramsFourth" class="detailed-question__field" placeholder="कम से कम 3 ऐसे लोगों के नाम बताएं, जिनका आप सम्मान करते हैं और जिनकी राय आपके लिए मायने रखती है"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
        </div>
        <button id="saveBtnFourth" class="detailed-question__btn fourth-screen__btn btn">Next question</button>
    </div>
</section>

<section class="detailed-question fifth-screen" id="fifth-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">Секция 6: Ваши любимые фильмы</div>
        <div class="detailed-question__body">
            <textarea id="favoriteMoviesFifth" class="detailed-question__field" placeholder="Введите названия ваших любимых фильмов"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
        </div>
        <button id="saveBtnFifth" class="detailed-question__btn fifth-screen__btn btn">Next question</button>
    </div>
</section>

<section class="detailed-question sixth-screen" id="sixth-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">Секция 6: Ваши любимые фильмы</div>
        <div class="detailed-question__body">
            <textarea name="favoriteMovies" id="favoriteMoviesSixth" class="detailed-question__field" placeholder="Введите названия ваших любимых фильмов"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
        </div>
        <button id="saveBtnSixth" class="detailed-question__btn sixth-screen__btn btn">Next question</button>
    </div>
</section>

<section class="detailed-question seventh-screen" id="seventh-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">Секция 7: Ваши любимые книги</div>
        <div class="detailed-question__body">
            <textarea name="favoriteBooks" id="favoriteBooksSeventh" class="detailed-question__field" placeholder="Введите названия ваших любимых книг"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
        </div>
        <button id="saveBtnSeventh" class="detailed-question__btn seventh-screen__btn btn">Next question</button>
    </div>
</section>

<section class="detailed-question eighth-screen" id="eighth-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">Секция 8: Ваши хобби</div>
        <div class="detailed-question__body">
            <textarea name="hobbies" id="hobbiesEighth" class="detailed-question__field" placeholder="Введите ваши хобби"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
        </div>
        <button id="saveBtnEighth" class="detailed-question__btn eighth-screen__btn btn">Next question</button>
    </div>
</section>

<section class="detailed-question ninth-screen" id="ninth-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">Секция 9: Ваши мечты</div>
        <div class="detailed-question__body">
            <textarea name="dreams" id="dreamsNinth" class="detailed-question__field" placeholder="Введите ваши мечты"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
        </div>
        <button id="saveBtnNinth" class="detailed-question__btn ninth-screen__btn btn">Next question</button>
    </div>
</section>

<section class="detailed-question tenth-screen" id="tenth-screen">
    <div class="detailed-question__container container">
        <div class="detailed-question__title title">Секция 10: Ваши цели на будущее</div>
        <div class="detailed-question__body">
            <textarea name="futureGoals" id="futureGoalsTenth" class="detailed-question__field" placeholder="Введите ваши цели на будущее"></textarea>
            <div class='detailed-question__warning'>Minimum 12 characters</div>
        </div>
        <button id='saveBtnTenth' class='detailed-question__btn tenth-screen__btn btn'>Next question</button>
    </div>
</section>




    <!-- <section class="thanks">
    <div class="thanks__container container">
       <a href="" class="thanks__logo">
            <img src="img/logo.svg" alt="logo" class="thanks__logo-img">
       </a>
       <div class="congratulation">
            <div class="congratulation__title">सर्वे में भाग लेने के लिए धन्यवाद!</div>
            <p class="congratulation__description">Congratulations! You made it in time to receive prize bonuses and participate in the draw for one of three new Toyota Camry XSE cars!</p>
       </div>
       <div class="subscription">
        <div class="subscription__item">
            <div class="subscription__item-title">30-Day Premium Planner - 49$</div>
            <div class="subscription__item-body">
                <p class="subscription__item-text">लक्ष्य प्राप्ति के लिए प्रीमियम कैलेंडर, जो आपकी आदतों, <br> आहार या दवाओं के सेवन पर नज़र रखने में मदद करेगा</p>
                <div class="subscription__right">TAKE FREE</div>
            </div>
        </div>
        <div class="subscription__item">
            <div class="subscription__item-title">Private Community Access - 297$</div>
            <div class="subscription__item-body">
                <p class="subscription__item-text">एक बंद समूह, जहाँ आप विशेषज्ञों और समान सोच रखने वाले <br> लोगों से सलाह, समर्थन और प्रतिक्रिया प्राप्त कर सकते हैं</p>
                <div class="subscription__right">TAKE FREE</div>
            </div>
        </div>
        <div class="subscription__item">
            <div class="subscription__item-title">Best Prostatitis Remedy - ₹11,990</div>
            <div class="subscription__item-body">
                <p class="subscription__item-text">पहला उत्पाद जिसे भारत सरकार की आधिकारिक मान्यता <br> और स्वास्थ्य मंत्रालय द्वारा प्रमाणित प्रभावशीलता प्राप्त हुई है</p>
                <div class="subscription__right">SALE-79%</div>
            </div>
        </div>
        </div>
        <div class="ticket">
            <div class="ticket__body">
                <div class="ticket__title">Your lottery ticket</div>
                <p class="ticket__description">You are automatically participating in the draw for 3 new Toyota Camry XSE cars</p>
                <p class="ticket__result">Draw results: May 19, 2025</p>
            </div>
            <div class="ticket__number"><div class="ticket__number-wrap"><span class="ticket__number-text">X2S54G0</span></div></div>
        </div>
        <div class="thanks__bottom">
            <div class="thanks__bottom-text">
                नीचे अपना ईमेल दर्ज करें ताकि हम आपसे संपर्क कर सकें, अगर आपका टिकट जीत जाता है! हम आपकी सफलता और अच्छे स्वास्थ्य की कामना करते हैं!
            </div>
            <div class="thanks__bottom-wrap">
                <input type="text" placeholder="Enter your email..." class="thanks__bottom-mail">
                <button class="thanks__bottom-btn">Notify me</button>
            </div>
        </div>
        </div>
       </div>
    </div>
    </section> -->

    <!-- Место для вывода сообщений -->
    <div id="responseMessage"></div>

    <script>
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
</script>


    <!-- <script>
        // Обработчик события для кнопки
        document.getElementById('submitBtn').addEventListener('click', function() {
            // Скрываем секцию вопросов
            document.getElementById('first-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.getElementById('questionsSection').style.display = 'flex';
        });
    </script> -->

<!-- <script>
    // Обработчик события для кнопки
    document.getElementById('submitBtn').addEventListener('click', function() {
        // Скрываем секцию вопросов
        document.getElementById('questionsSection').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.getElementById('detailedQuestionSection').style.display = 'flex';
    });
</script> -->

<script>
    // Обработчик события для кнопки по классу
    document.querySelector('.second-screen__btn').addEventListener('click', function() {
        // Скрываем секцию вопросов
        document.querySelector('.second-screen').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.querySelector('.third-screen').style.display = 'flex';
    });
</script>

<script>
    // Обработчик события для кнопки по классу
    document.querySelector('.third-screen__btn').addEventListener('click', function() {
        // Скрываем секцию вопросов
        document.querySelector('.third-screen').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.querySelector('.fourth-screen').style.display = 'flex';
    });
</script>

<script>
    // Обработчик события для кнопки по классу
    document.querySelector('.fourth-screen__btn').addEventListener('click', function() {
        // Скрываем секцию вопросов
        document.querySelector('.fourth-screen').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.querySelector('.fifth-screen').style.display = 'flex';
    });
</script>



<!-- <script>
    // Обработчик события для кнопки
    document.getElementById('submitBtn').addEventListener('click', function() {
        // Скрываем секцию вопросов
        document.getElementById('questionsSection').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.getElementById('detailedQuestionSection').style.display = 'flex';
    });
</script> -->

<!-- <script>
    // Обработчик события для кнопки по классу
    document.querySelector('.btn').addEventListener('click', function() {
        // Скрываем секцию вопросов
        document.querySelector('.third-screen').style.display = 'none';
        
        // Показываем секцию детального вопроса
        document.querySelector('.fourth-screen').style.display = 'flex';
    });
</script> -->

    <!-- <script>
        // Обработчик события для кнопки
        document.getElementById('submitBtn').addEventListener('click', function() {
            // Скрываем секцию вопросов
            document.getElementById('questionsSection').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.getElementById('detailedQuestionSection').style.display = 'flex';
        });
    </script> -->

    <!-- <script>
        const sections = document.querySelectorAll('section'); // Получаем все секции
const button = document.querySelector('.btn'); // Получаем кнопку
let currentIndex = 0; // Индекс текущей секции

button.addEventListener('click', () => {
    // Скрываем текущую секцию
    sections[currentIndex].style.display = 'none';

    // Увеличиваем индекс для следующей секции
    currentIndex++;

    // Проверяем, есть ли следующая секция
    if (currentIndex < sections.length) {
        // Показываем следующую секцию
        sections[currentIndex].style.display = 'block';
    } else {
        // Если это последняя секция, можно скрыть кнопку или сделать что-то еще
        button.disabled = true; // Отключаем кнопку после последней секции
        alert("Вы завершили просмотр всех секций!");
    }
});
    </script> -->

    <script>
    const progressBarItems = document.querySelectorAll('.progress-bar__item');
    const submitBtn = document.querySelector('.btn'); // Изменено на выбор по классу
    // const saveBtn = document.getElementById('saveBtn'); // Получаем кнопку по ID
    const saveBtnThird = document.getElementById('saveBtnThird'); // Получаем кнопку по ID
    const saveBtnFourth = document.getElementById('saveBtnFourth'); // Получаем кнопку по ID

    let currentIndex = 0;

    function updateProgressBar() {
        // Проверяем, что текущий индекс меньше количества элементов
        if (currentIndex < progressBarItems.length) {
            // Убираем класс active у текущего элемента и добавляем passed
            progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
            progressBarItems[currentIndex].classList.add('progress-bar__item-passed');

            // Удаляем класс у элемента stage и добавляем новый класс
            const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
            if (stageElement) {
                stageElement.classList.remove('progress-bar__item-stage');
                stageElement.classList.add('progress-bar__item-stage_active');
            }

            // Переходим к следующему элементу
            currentIndex++;

            // Проверяем, есть ли следующий элемент
            if (currentIndex < progressBarItems.length) {
                // Добавляем класс active к следующему элементу
                progressBarItems[currentIndex].classList.add('progress-bar__item-active');
            } else {
                // Если это последний элемент, можно скрыть кнопку или сделать что-то еще
                submitBtn.disabled = true; // Пример: отключаем кнопку после последнего вопроса
                // saveBtn.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                saveBtnThird.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                saveBtnFourth.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                alert("Вы завершили опрос!");
            }
        }
    }

    // Обработчик события для кнопки submit
    submitBtn.addEventListener('click', updateProgressBar);

    // Обработчик события для кнопки save
    // saveBtn.addEventListener('click', updateProgressBar);

    saveBtnThird.addEventListener('click', updateProgressBar);

    saveBtnFourth.addEventListener('click', updateProgressBar);

    </script>
    
</body>
</html>