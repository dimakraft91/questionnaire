<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
    <title>संक्षिप्त सर्वेक्षण पूरा करें और कुल $346 मूल्य के 3 बोनस सुनिश्चित रूप से प्राप्त करें, साथ ही 3 नई Toyota Camry XSE कारों के लकी ड्रा में स्वचालित रूप से भाग लें।</title>    

   <script>
        // Генерация рандомного купона

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

// Генерация рандомного купона
    </script>
    <script defer>
        // Обработчик события для кнопки по классу
        document.querySelector('.start__body-btn').addEventListener('click', function() {
            // Скрываем секцию вопросов
            document.querySelector('.first-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.querySelector('.questionnaire__wrap').style.display = 'flex';
            document.querySelector('.second-screen').style.display = 'flex';
        });

        document.getElementById('submitBtn').addEventListener('click', function() {
        // Получаем все чекбоксы внутри формы
        const checkboxes = document.querySelectorAll('#questionsForm input[type="checkbox"]');
        // Проверяем, есть ли выбранные чекбоксы
        const isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);
        
        if (isAnyChecked) {
            // Есть выбранные — показываем третью секцию
            document.querySelector('.second-screen').style.display = 'none';
            document.querySelector('.third-screen').style.display = 'flex';
        } else {
            // Нет выбранных — показываем вторую секцию
            document.querySelector('.second-screen').style.display = 'flex';
            document.querySelector('.third-screen').style.display = 'none';
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
            const checkboxes = document.querySelectorAll('#questionsForm input[type="checkbox"]');
            const submitBtn = document.getElementById('submitBtn');
        
            // Функция для обновления класса у кнопки
            function updateButtonClass() {
                const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
                if (anyChecked) {
                    if (!submitBtn.classList.contains('second-screen__btn-check')) {
                        submitBtn.classList.add('second-screen__btn-check');
                        attachClickHandler(); // навешиваем обработчик при добавлении класса
                    }
                } else {
                    if (submitBtn.classList.contains('second-screen__btn-check')) {
                        submitBtn.classList.remove('second-screen__btn-check');
                        detachClickHandler(); // при необходимости — убрать обработчик
                    }
                }
            }
        
            // Обработчик для чекбоксов
            checkboxes.forEach(cb => {
                cb.addEventListener('change', updateButtonClass);
            });
        
            // Переменная для хранения функции-обработчика клика
            let progressBarHandler = null;
        
            // Функция для навешивания обработчика на кнопку
            function attachClickHandler() {
                if (!progressBarHandler) {
                    progressBarHandler = () => {
                        updateProgressBar();
                    };
                    submitBtn.addEventListener('click', progressBarHandler);
                }
            }
        
            // Функция для удаления обработчика (если нужно)
            function detachClickHandler() {
                if (progressBarHandler) {
                    submitBtn.removeEventListener('click', progressBarHandler);
                    progressBarHandler = null;
                }
            }
        
            // Изначально проверяем состояние чекбоксов
            updateButtonClass();
        
            // Объявляем функцию обновления прогресс-бара
            const progressBarItems = document.querySelectorAll('.progress-bar__item');
            let currentIndex = 0;
        
            function updateProgressBar() {
                if (currentIndex < progressBarItems.length) {
                    // Убираем активный класс у текущего элемента и добавляем passed
                    progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                    progressBarItems[currentIndex].classList.add('progress-bar__item-passed');
        
                    // Обновляем stage внутри элемента
                    const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                    if (stageElement) {
                        stageElement.classList.remove('progress-bar__item-stage');
                        stageElement.classList.add('progress-bar__item-stage_active');
                    }
        
                    currentIndex++;
        
                    // Активируем следующий элемент, если он есть
                    if (currentIndex < progressBarItems.length) {
                        progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                    }
                }
            }
        });

    </script>
</head>
<body>
    <section class="start first-screen" id="first-screen">
        <div class="start__container container">
            <a href="" class="start__logo">
                <img src="img/logo.webp" alt="logo" class="start__logo-img">
            </a>
            <div class="start__body">
                <p class="start__body-description">भारत के स्वास्थ्य मंत्रालय द्वारा अंतरराष्ट्रीय मूत्र रोग विशेषज्ञ संघों के सहयोग से आयोजित वार्षिक पुरुष स्वास्थ्य सर्वेक्षण</p>
                <p class="start__body-description_bold">संक्षिप्त सर्वेक्षण पूरा करें और कुल $346 मूल्य के 3 बोनस सुनिश्चित रूप से प्राप्त करें, साथ ही 3 नई Toyota Camry XSE कारों के लकी ड्रा में स्वचालित रूप से भाग लें।</p>
                <button class="start__body-btn">Start</button>
            </div>
        </div>
    </section>

    <div class="questionnaire__wrap">
    <div class="wrap">
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
    </div>
    <section class="questions second-screen" id="questionsSection">
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
                    <button type="button" id="submitBtn" class="questions__btn btn second-screen__btn">Next question</button>
                </form>
            </div>
    </section>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const questionsItems = document.querySelectorAll('.questions__item');

    questionsItems.forEach(item => {
        const checkbox = item.querySelector('.questions__item-check');

        // Обработчик клика по всему вопросу
        item.addEventListener('click', function() {
            // Устанавливаем чекбокс в состояние checked
            checkbox.checked = true;

            // Удаляем активные классы и сбрасываем другие чекбоксы
            questionsItems.forEach(otherItem => {
                const otherCheckbox = otherItem.querySelector('.questions__item-check');
                if (otherItem !== item) {
                    otherCheckbox.checked = false; // снимаем отметку с других чекбоксов
                    otherItem.classList.remove('questions__item-active'); // убираем класс активного элемента
                }
            });

            // Добавляем класс активного элемента к текущему
            item.classList.add('questions__item-active');
        });
    });
});
</script>

    

    <section class="detailed-question third-screen" id="third-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">आप कौन से टीवी प्रोग्राम या शो देखना पसंद करते हैं?</div>
            <div class="detailed-question__body">
            <textarea name="tvPrograms" id="tvProgramsThird" class="detailed-question__field" placeholder="वो टीवी प्रोग्राम या शो लिखें, जो आप सबसे ज़्यादा देखते हैं" minlength="12"></textarea>
            <div class="detailed-question__warning">Minimum 12 characters</div>
            </div>
            <button id="saveBtnThird" class="detailed-question__btn third-screen__btn btn">Next question</button>
        </div>
    </section>

    <section class="detailed-question fourth-screen" id="fourth-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">क्या आपके पसंदीदा टीवी होस्ट या अभिनेता हैं? अगर हां, तो उनके नाम बताएं</div>
            <div class="detailed-question__body">
                <textarea name="tvPrograms" id="tvProgramsFourth" class="detailed-question__field detailed-question__field-fourth" placeholder="कम से कम 3 ऐसे लोगों के नाम बताएं, जिनका आप सम्मान करते हैं और जिनकी राय आपके लिए मायने रखती है"></textarea>
                <div class="detailed-question__warning">Minimum 12 characters</div>
            </div>
            <button id="saveBtnFourth" class="detailed-question__btn fourth-screen__btn btn">Next question</button>
        </div>
    </section>

    <section class="detailed-question fifth-screen" id="fifth-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">आप स्वास्थ्य और चिकित्सा के क्षेत्र में किसे अधिकारिक मानते हैं?</div>
            <div class="detailed-question__body">
                <textarea id="tvProgramsFifth" class="detailed-question__field detailed-question__field-fifth" placeholder="उन लोगों के नाम लिखें, जिन पर आप अपने स्वास्थ्य के मामले में पूरी तरह भरोसा करेंगे"></textarea>
                <div class="detailed-question__warning">Minimum 12 characters</div>
            </div>
            <button id="saveBtnFifth" class="detailed-question__btn fifth-screen__btn btn">Next question</button>
        </div>
    </section>

    <section class="detailed-question sixth-screen" id="sixth-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">पुरुषों के स्वास्थ्य से जुड़े उत्पादों की विज्ञापन में आपको क्या गुस्सा दिलाता है?</div>
            <div class="detailed-question__body">
                <textarea name="favoriteMovies" id="favoriteMoviesSixth" class="detailed-question__field detailed-question__field-sixth" placeholder="विज्ञापन में ऐसी कौन सी बातें हैं, जो आपको परेशान करती हैं? विस्तार से बताएं"></textarea>
                <div class="detailed-question__warning">Minimum 12 characters</div>
            </div>
            <button id="saveBtnSixth" class="detailed-question__btn sixth-screen__btn btn">Next question</button>
        </div>
    </section>

    <section class="detailed-question seventh-screen" id="seventh-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">आप मशहूर हस्तियों के विज्ञापनों के बारे में क्या सोचते हैं?</div>
            <div class="detailed-question__body">
                <textarea id="seventhScreen" class="detailed-question__field detailed-question__field-seventh" placeholder="बताएं कि आप विज्ञापन में मशहूर हस्तियों को लेकर क्या सोचते हैं"></textarea>
                <div class="detailed-question__warning">Minimum 12 characters</div>
            </div>
            <button id="saveBtnSeventh" class="detailed-question__btn seventh-screen__btn btn">Next question</button>
        </div>
    </section>

    <section class="detailed-question eighth-screen" id="eighth-screen">
        <div class="detailed-question__container container">
            <div class="detailed-question__title title">आपको विज्ञापन में क्या पसंद आता है?</div>
            <form id="questionsForm" class="questionsForm questionsformeight">
                <div class="questions__item">
                    <input type="checkbox" name="finalquestions[]" class="questions__item-check" id="item1" value="ईमानदारी और स्पष्टता">
                    <label class="questions__item-text" for="item1">ईमानदारी और स्पष्टता</label>
                </div>
                <div class="questions__item">
                    <input type="checkbox" name="finalquestions[]" class="questions__item-check" id="item2" value="असली पुरुषों की कहानियाँ">
                    <label class="questions__item-text" for="item2">असली पुरुषों की कहानियाँ</label>
                </div>
                <div class="questions__item">
                    <input type="checkbox" name="finalquestions[]" class="questions__item-check" id="item3" value="कैसे काम करता है, इसका आसान और साफ़ समझाया गया तरीका">
                    <label class="questions__item-text" for="item3">कैसे काम करता है, इसका आसान और साफ़ समझाया गया तरीका</label>
                </div>
                <div class="questions__item">
                    <input type="checkbox" name="finalquestions[]" class="questions__item-check" id="item4" value="सरलता और सम्मान">
                    <label class="questions__item-text" for="item4">सरलता और सम्मान</label>
                </div>
                <div class="questions__item">
                    <input type="checkbox" name="finalquestions[]" class="questions__item-check" id="item5" value="मर्दाना अंदाज़: बिना रोए-धोए, सीधे मुद्दे पर">
                    <label class="questions__item-text" for="item5">मर्दाना अंदाज़: बिना रोए-धोए, सीधे मुद्दे पर</label>
                </div>
                <div class="questions__item">
                    <input type="checkbox" name="finalquestions[]" class="questions__item-check" id="item5" value="बोनस और डिस्काउंट">
                    <label class="questions__item-text" for="item5">बोनस और डिस्काउंट</label>
                </div>
                <button type="button" id="saveBtnEighth" class="questions__btn eighth-screen__btn btn">GET BONUSES</button>
            </form>
        </div>
    </section>

    </div>

    <section class="thanks">
    <div class="thanks__container container">
       <a href="" class="thanks__logo">
            <img src="img/logo.webp" alt="logo" class="thanks__logo-img">
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
                <a href="Premium_30_Day_Planner.pdf" download="Free month plan" class="subscription__right">TAKE FREE</a>
            </div>
        </div>
        <div class="subscription__item">
            <div class="subscription__item-title">Private Community Access - 297$</div>
            <div class="subscription__item-body">
                <p class="subscription__item-text">एक बंद समूह, जहाँ आप विशेषज्ञों और समान सोच रखने वाले <br> लोगों से सलाह, समर्थन और प्रतिक्रिया प्राप्त कर सकते हैं</p>
                <a href="https://t.me/DrAmitBansal" target="blank" class="subscription__right">TAKE FREE</a>
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
                <p class="ticket__result">Draw results: <span class="end-date"></span></p>
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
            <div id="popup" class="popup-overlay" style="display: none;">
                <div class="popup-content">
                    Done! If your ticket wins - we will contact you!
                </div>
            </div>
        </div>
        </div>
       </div>
    </div>
    </section>
    
    

    <script>
        // popup окно

document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.thanks__bottom-btn');
    const popup = document.getElementById('popup');
    const emailInput = document.querySelector('.thanks__bottom-mail');

    // Функция для проверки заполненности поля
    function isEmailFilled() {
        return emailInput && emailInput.value.trim() !== '';
    }

    // Обработчик клика по кнопке
    btn.addEventListener('click', function() {
        if (isEmailFilled()) {
            // Если поле заполнено, показываем popup
            popup.style.display = 'flex';
        } else {
            // Если поле пустое, ничего не делаем или можно показать сообщение
            // например, alert('Пожалуйста, введите ваш email');
            
        }
    });

    // Закрытие popup при клике на крестик

    // Закрытие popup при клике вне окна
    popup.addEventListener('click', function(e) {
        if (e.target === popup) {
            popup.style.display = 'none';
        }
    });
});

// popup окно
    </script>

    <!-- Место для вывода сообщений -->
    <div id="responseMessage" style="display: none;"></div>

    <script defer>
        // Обработчик события для кнопки по классу
        document.querySelector('.start__body-btn').addEventListener('click', function() {
            // Скрываем секцию вопросов
            document.querySelector('.first-screen').style.display = 'none';
            
            // Показываем секцию детального вопроса
            document.querySelector('.questionnaire__wrap').style.display = 'flex';
            document.querySelector('.second-screen').style.display = 'flex';
        });

        document.getElementById('submitBtn').addEventListener('click', function() {
        // Получаем все чекбоксы внутри формы
        const checkboxes = document.querySelectorAll('#questionsForm input[type="checkbox"]');
        // Проверяем, есть ли выбранные чекбоксы
        const isAnyChecked = Array.from(checkboxes).some(cb => cb.checked);
        
        if (isAnyChecked) {
            // Есть выбранные — показываем третью секцию
            document.querySelector('.second-screen').style.display = 'none';
            document.querySelector('.third-screen').style.display = 'flex';
        } else {
            // Нет выбранных — показываем вторую секцию
            document.querySelector('.second-screen').style.display = 'flex';
            document.querySelector('.third-screen').style.display = 'none';
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
            const checkboxes = document.querySelectorAll('#questionsForm input[type="checkbox"]');
            const submitBtn = document.getElementById('submitBtn');
        
            // Функция для обновления класса у кнопки
            function updateButtonClass() {
                const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
                if (anyChecked) {
                    if (!submitBtn.classList.contains('second-screen__btn-check')) {
                        submitBtn.classList.add('second-screen__btn-check');
                        attachClickHandler(); // навешиваем обработчик при добавлении класса
                    }
                } else {
                    if (submitBtn.classList.contains('second-screen__btn-check')) {
                        submitBtn.classList.remove('second-screen__btn-check');
                        detachClickHandler(); // при необходимости — убрать обработчик
                    }
                }
            }
        
            // Обработчик для чекбоксов
            checkboxes.forEach(cb => {
                cb.addEventListener('change', updateButtonClass);
            });
        
            // Переменная для хранения функции-обработчика клика
            let progressBarHandler = null;
        
            // Функция для навешивания обработчика на кнопку
            function attachClickHandler() {
                if (!progressBarHandler) {
                    progressBarHandler = () => {
                        updateProgressBar();
                    };
                    submitBtn.addEventListener('click', progressBarHandler);
                }
            }
        
            // Функция для удаления обработчика (если нужно)
            function detachClickHandler() {
                if (progressBarHandler) {
                    submitBtn.removeEventListener('click', progressBarHandler);
                    progressBarHandler = null;
                }
            }
        
            // Изначально проверяем состояние чекбоксов
            updateButtonClass();
        
            // Объявляем функцию обновления прогресс-бара
            const progressBarItems = document.querySelectorAll('.progress-bar__item');
            let currentIndex = 0;
        
            function updateProgressBar() {
                if (currentIndex < progressBarItems.length) {
                    // Убираем активный класс у текущего элемента и добавляем passed
                    progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                    progressBarItems[currentIndex].classList.add('progress-bar__item-passed');
        
                    // Обновляем stage внутри элемента
                    const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                    if (stageElement) {
                        stageElement.classList.remove('progress-bar__item-stage');
                        stageElement.classList.add('progress-bar__item-stage_active');
                    }
        
                    currentIndex++;
        
                    // Активируем следующий элемент, если он есть
                    if (currentIndex < progressBarItems.length) {
                        progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                    }
                }
            }
        });

    </script>

    <script src="js/main.js" async></script>

    <!-- <script async>
        document.addEventListener('DOMContentLoaded', () => {
            const checkboxes = document.querySelectorAll('#questionsForm input[type="checkbox"]');
            const submitBtn = document.getElementById('submitBtn');
        
            // Функция для обновления класса у кнопки
            function updateButtonClass() {
                const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
                if (anyChecked) {
                    if (!submitBtn.classList.contains('second-screen__btn-check')) {
                        submitBtn.classList.add('second-screen__btn-check');
                        attachClickHandler(); // навешиваем обработчик при добавлении класса
                    }
                } else {
                    if (submitBtn.classList.contains('second-screen__btn-check')) {
                        submitBtn.classList.remove('second-screen__btn-check');
                        detachClickHandler(); // при необходимости — убрать обработчик
                    }
                }
            }
        
            // Обработчик для чекбоксов
            checkboxes.forEach(cb => {
                cb.addEventListener('change', updateButtonClass);
            });
        
            // Переменная для хранения функции-обработчика клика
            let progressBarHandler = null;
        
            // Функция для навешивания обработчика на кнопку
            function attachClickHandler() {
                if (!progressBarHandler) {
                    progressBarHandler = () => {
                        updateProgressBar();
                    };
                    submitBtn.addEventListener('click', progressBarHandler);
                }
            }
        
            // Функция для удаления обработчика (если нужно)
            function detachClickHandler() {
                if (progressBarHandler) {
                    submitBtn.removeEventListener('click', progressBarHandler);
                    progressBarHandler = null;
                }
            }
        
            // Изначально проверяем состояние чекбоксов
            updateButtonClass();
        
            // Объявляем функцию обновления прогресс-бара
            const progressBarItems = document.querySelectorAll('.progress-bar__item');
            let currentIndex = 0;
        
            function updateProgressBar() {
                if (currentIndex < progressBarItems.length) {
                    // Убираем активный класс у текущего элемента и добавляем passed
                    progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                    progressBarItems[currentIndex].classList.add('progress-bar__item-passed');
        
                    // Обновляем stage внутри элемента
                    const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                    if (stageElement) {
                        stageElement.classList.remove('progress-bar__item-stage');
                        stageElement.classList.add('progress-bar__item-stage_active');
                    }
        
                    currentIndex++;
        
                    // Активируем следующий элемент, если он есть
                    if (currentIndex < progressBarItems.length) {
                        progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                    }
                }
            }
        });
    </script> -->

    <script async>
    document.addEventListener('DOMContentLoaded', () => {
        const textarea = document.getElementById('tvProgramsThird');
        const saveBtn = document.getElementById('saveBtnThird');
    
        const progressBarItems = document.querySelectorAll('.progress-bar__item');
        let currentIndex = 0;
    
        function checkTextLength() {
            if (textarea.value.trim().length >= 12) {
                if (!saveBtn.classList.contains('third-screen__btn-check')) {
                    saveBtn.classList.add('third-screen__btn-check');
                    // Автоматически обновляем прогрессбар при достижении условия
                    updateProgressBar();
                }
            } else {
                if (saveBtn.classList.contains('third-screen__btn-check')) {
                    saveBtn.classList.remove('third-screen__btn-check');
                }
            }
        }
    
        // Обработчик для textarea
        textarea.addEventListener('input', checkTextLength);
    
        // Изначально проверяем состояние при загрузке
        checkTextLength();
    
        // Обработчик для клика по кнопке
        document.addEventListener('click', (e) => {
            if (e.target.matches('#saveBtnThird')) {
                // Обновляем прогрессбар только если условие выполнено
                if (textarea.value.trim().length >= 12) {
                    updateProgressBar();
                }
            }
        });
    
        function updateProgressBar() {
            if (currentIndex < progressBarItems.length) {
                progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                progressBarItems[currentIndex].classList.add('progress-bar__item-passed');
    
                const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                if (stageElement) {
                    stageElement.classList.remove('progress-bar__item-stage');
                    stageElement.classList.add('progress-bar__item-stage_active');
                }
    
                currentIndex++;
    
                if (currentIndex < progressBarItems.length) {
                    progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                } else {
                    // Можно добавить действия по завершению
                }
            }
        }
    });
    </script>

    <script async>
        document.addEventListener('DOMContentLoaded', () => {
            const textarea = document.getElementById('tvProgramsFourth');
            const saveBtn = document.getElementById('saveBtnFourth');

            const progressBarItems = document.querySelectorAll('.progress-bar__item');
            let currentIndex = 1; // начинаем с 1 вместо 0

            function checkTextLength() {
                if (textarea.value.trim().length >= 12) {
                    if (!saveBtn.classList.contains('fourth-screen__btn-check')) {
                        saveBtn.classList.add('fourth-screen__btn-check');
                        // Автоматически обновляем прогрессбар при достижении условия
                        updateProgressBar();
                    }
                } else {
                    if (saveBtn.classList.contains('fourth-screen__btn-check')) {
                        saveBtn.classList.remove('fourth-screen__btn-check');
                    }
                }
            }

            // Обработчик для textarea
            textarea.addEventListener('input', checkTextLength);

            // Изначально проверяем состояние при загрузке
            checkTextLength();

            // Обработчик для клика по кнопке
            document.addEventListener('click', (e) => {
                if (e.target.matches('#saveBtnFourth')) {
                    // Обновляем прогрессбар только если условие выполнено
                    if (textarea.value.trim().length >= 12) {
                        updateProgressBar();
                    }
                }
            });

            function updateProgressBar() {
                if (currentIndex < progressBarItems.length) {
                    progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                    progressBarItems[currentIndex].classList.add('progress-bar__item-passed');

                    const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                    if (stageElement) {
                        stageElement.classList.remove('progress-bar__item-stage');
                        stageElement.classList.add('progress-bar__item-stage_active');
                    }

                    currentIndex++;

                    if (currentIndex < progressBarItems.length) {
                        progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                    } else {
                        // Можно добавить действия по завершению
                    }
                }
            }
        });
    </script>

    <script async>
    document.addEventListener('DOMContentLoaded', () => {
        const textarea = document.getElementById('tvProgramsFifth');
        const saveBtn = document.getElementById('saveBtnFifth');

        const progressBarItems = document.querySelectorAll('.progress-bar__item');
        let currentIndex = 2; // начинаем с 1 вместо 0

        function checkTextLength() {
            if (textarea.value.trim().length >= 12) {
                if (!saveBtn.classList.contains('fifth-screen__btn-check')) {
                    saveBtn.classList.add('fifth-screen__btn-check');
                    // Автоматически обновляем прогрессбар при достижении условия
                    updateProgressBar();
                }
            } else {
                if (saveBtn.classList.contains('fifth-screen__btn-check')) {
                    saveBtn.classList.remove('fifth-screen__btn-check');
                }
            }
        }

        // Обработчик для textarea
        textarea.addEventListener('input', checkTextLength);

        // Изначально проверяем состояние при загрузке
        checkTextLength();

        // Обработчик для клика по кнопке
        document.addEventListener('click', (e) => {
            if (e.target.matches('#saveBtnFifth')) {
                // Обновляем прогрессбар только если условие выполнено
                if (textarea.value.trim().length >= 12) {
                    updateProgressBar();
                }
            }
        });

        function updateProgressBar() {
            if (currentIndex < progressBarItems.length) {
                progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                progressBarItems[currentIndex].classList.add('progress-bar__item-passed');

                const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                if (stageElement) {
                    stageElement.classList.remove('progress-bar__item-stage');
                    stageElement.classList.add('progress-bar__item-stage_active');
                }

                currentIndex++;

                if (currentIndex < progressBarItems.length) {
                    progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                } else {
                    // Можно добавить действия по завершению
                }
            }
        }
    });
    </script>

    <script async>
        document.addEventListener('DOMContentLoaded', () => {
            const textarea = document.getElementById('favoriteMoviesSixth');
            const saveBtn = document.getElementById('saveBtnSixth');

            const progressBarItems = document.querySelectorAll('.progress-bar__item');
            let currentIndex = 3; // начинаем с 1 вместо 0

            function checkTextLength() {
                if (textarea.value.trim().length >= 12) {
                    if (!saveBtn.classList.contains('sixth-screen__btn-check')) {
                        saveBtn.classList.add('sixth-screen__btn-check');
                        // Автоматически обновляем прогрессбар при достижении условия
                        updateProgressBar();
                    }
                } else {
                    if (saveBtn.classList.contains('sixth-screen__btn-check')) {
                        saveBtn.classList.remove('sixth-screen__btn-check');
                    }
                }
            }

            // Обработчик для textarea
            textarea.addEventListener('input', checkTextLength);

            // Изначально проверяем состояние при загрузке
            checkTextLength();

            // Обработчик для клика по кнопке
            document.addEventListener('click', (e) => {
                if (e.target.matches('#saveBtnSixth')) {
                    // Обновляем прогрессбар только если условие выполнено
                    if (textarea.value.trim().length >= 12) {
                        updateProgressBar();
                    }
                }
            });

            function updateProgressBar() {
                if (currentIndex < progressBarItems.length) {
                    progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                    progressBarItems[currentIndex].classList.add('progress-bar__item-passed');

                    const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                    if (stageElement) {
                        stageElement.classList.remove('progress-bar__item-stage');
                        stageElement.classList.add('progress-bar__item-stage_active');
                    }

                    currentIndex++;

                    if (currentIndex < progressBarItems.length) {
                        progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                    } else {
                        // Можно добавить действия по завершению
                    }
                }
            }
        });
    </script>

    <script async>
        document.addEventListener('DOMContentLoaded', () => {
            const textarea = document.getElementById('seventhScreen');
            const saveBtn = document.getElementById('saveBtnSeventh');

            const progressBarItems = document.querySelectorAll('.progress-bar__item');
            let currentIndex = 4; // начинаем с 1 вместо 0

            function checkTextLength() {
                if (textarea.value.trim().length >= 12) {
                    if (!saveBtn.classList.contains('seventh-screen__btn-check')) {
                        saveBtn.classList.add('seventh-screen__btn-check');
                        // Автоматически обновляем прогрессбар при достижении условия
                        updateProgressBar();
                    }
                } else {
                    if (saveBtn.classList.contains('seventh-screen__btn-check')) {
                        saveBtn.classList.remove('seventh-screen__btn-check');
                    }
                }
            }

            // Обработчик для textarea
            textarea.addEventListener('input', checkTextLength);

            // Изначально проверяем состояние при загрузке
            checkTextLength();

            // Обработчик для клика по кнопке
            document.addEventListener('click', (e) => {
                if (e.target.matches('#saveBtnSeventh')) {
                    // Обновляем прогрессбар только если условие выполнено
                    if (textarea.value.trim().length >= 12) {
                        updateProgressBar();
                    }
                }
            });

            function updateProgressBar() {
                if (currentIndex < progressBarItems.length) {
                    progressBarItems[currentIndex].classList.remove('progress-bar__item-active');
                    progressBarItems[currentIndex].classList.add('progress-bar__item-passed');

                    const stageElement = progressBarItems[currentIndex].querySelector('.progress-bar__item-stage');
                    if (stageElement) {
                        stageElement.classList.remove('progress-bar__item-stage');
                        stageElement.classList.add('progress-bar__item-stage_active');
                    }

                    currentIndex++;

                    if (currentIndex < progressBarItems.length) {
                        progressBarItems[currentIndex].classList.add('progress-bar__item-active');
                    } else {
                        // Можно добавить действия по завершению
                    }
                }
            }
        });
    </script>

<script defer>
        document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.thanks__bottom-btn');
    const emailInput = document.querySelector('.thanks__bottom-mail');
    const thanksWrap = document.querySelector('.thanks__bottom-wrap'); // исходный блок
    const popupOverlay = document.querySelector('.popup-overlay'); // оверлей

    // Функция для проверки заполненности поля
    function isEmailFilled() {
        return emailInput && emailInput.value.trim() !== '';
    }

    // Обработчик клика по кнопке
    btn.addEventListener('click', function() {
        if (isEmailFilled()) {
            // Скрываем thanks__bottom-wrap
            if (thanksWrap) {
                thanksWrap.style.display = 'none';
            }
            // Показываем popup-overlay
            if (popupOverlay) {
                popupOverlay.style.display = 'flex'; // или другой стиль, который нужен
            }
        } else {
            // Можно оставить пустым или показывать сообщение
            // alert('Пожалуйста, введите ваш email');
        }
    });
});
    </script>

    <script src="js/libs/moment-with-locales.min.js"></script>
    
    <script defer>
        const endDateEl = document.querySelector('.end-date');
        if(endDateEl) {
            moment.locale(document.documentElement.lang.split('-')[0]);
            endDateEl.innerText = moment().add(3, 'days').format('LL');
        }
    </script>
    
   
    
    
</body>
</html>