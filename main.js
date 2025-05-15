
    const progressBarItems = document.querySelectorAll('.progress-bar__item');
    const thirdScreenBtnCheck = document.querySelector('.third-screen__btn-check'); // Изменено на выбор по классу

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
                // submitBtn.disabled = true; // Пример: отключаем кнопку после последнего вопроса
                // saveBtn.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                // saveBtnThird.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                // saveBtnFourth.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                // saveBtnFifth.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                // saveBtnSixth.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                // saveBtnSeventh.disabled = true; // Отключаем кнопку сохранения после завершения опроса
                // saveBtnEighth.disabled = true; // Отключаем кнопку сохранения после завершения опроса

                
                
                // alert("Вы завершили опрос!");
            }
        }
    }

    // Обработчик события для кнопки submit
    thirdScreenBtnCheck.addEventListener('click', updateProgressBar);
