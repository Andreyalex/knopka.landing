<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_quiz
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<div class="knp-quiz">

    <div class="knp-item knp-start" data-id="start">
        <div class="knp-panel">
            <div>
                Давайте выберем способ продвижения, наиболее подходящий именно Вам!
            </div>
            <div>
                <input class="knp-submit" type="button" value="Начать" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="1">
        <div class="knp-panel">
            <div class="knp-question">
                Относится ли Ваш бизнес к одной из ниш
                <div>Одежда, обувь, косметика, косметологические услуги</div>
                <div>Еда</div>
                <div>Товары для детей, товары для женщин</div>
                <div>Товары для животных</div>
                <div>Отдых</div>
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="1" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="3,4" />
            </div>
            <div>
                <input class="knp-next" type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="2">
        <div class="knp-panel">
            <div class="knp-question">
                Есть ли у вас сайт?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="1,2,3" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="1,2,4" />
            </div>
            <div>
                <input class="knp-prev" type="button" value="Назад" />
            </div>
            <div>
                <input class="knp-next" type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="3">
        <div class="knp-panel">
            <div class="knp-question">
                Какой возраст у ваших клиентов?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="18 - 35 лет" data-score="1,2,4" />
                <input class="knp-answer knp-submit" type="button" value="35 - 46 лет" data-score="3,2,4" />
                <input class="knp-answer knp-submit" type="button" value="47 - 60 лет" data-score="2,3,4" />
            </div>
            <div>
                <input class="knp-prev" type="button" value="Назад" />
            </div>
            <div>
                <input class="knp-next" type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="4">
        <div class="knp-panel">
            <div class="knp-question">
                Является ли вашбизнес сезонным?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="3,4" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="1,2" />
            </div>
            <div>
                <input class="knp-prev" type="button" value="Назад" />
            </div>
            <div>
                <input class="knp-next" type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="5">
        <div class="knp-panel">
            <div class="knp-question">
                Получаете ли вы с одного человека в своем бизнесе доход более $20 ?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="Да" data-score="1,2,3,4" />
                <input class="knp-answer knp-submit" type="button" value="Нет" data-score="4" />
            </div>
            <div>
                <input class="knp-prev" type="button" value="Назад" />
            </div>
            <div>
                <input class="knp-next" type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="6">
        <div class="knp-panel">
            <div class="knp-question">
                Сколько покупок у Вас, в среднем, совершает один клиент?
            </div>
            <div class="knp-answers">
                <input class="knp-answer knp-submit" type="button" value="1 раз" data-score="1,3,4" />
                <input class="knp-answer knp-submit" type="button" value="2-5 раз" data-score="1,2,3,4" />
                <input class="knp-answer knp-submit" type="button" value="Более 5 раз" data-score="1,2,3,4" />
            </div>
            <div>
                <input class="knp-prev" type="button" value="Назад" />
            </div>
            <div>
                <input class="knp-next" type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-finish" data-id="finish">
        <div class="knp-panel">
            <div>Отлично!</div>
            <div class="knp-case-single">На основании Ваших ответов мы сделали вывод, что Вам лучше всего подходит</div>
            <div class="knp-case-multiple">На основании Ваших ответов мы сделали вывод, что Вам одинаково хорошо подходят</div>
            <div class="knp-result" data-id="1">
                Instagram
            </div>
            <div class="knp-result" data-id="2">
                Facebook
            </div>
            <div class="knp-result" data-id="3">
                Google KMS
            </div>
            <div class="knp-result" data-id="4">
                Доски обьявлений (!!!!)
            </div>
            <div>
                <input class="knp-submit" type="button" value="Давайте же начнем продвигать!" />
            </div>
            <div>
                Вы также можете вернуться к вопросам и подкорректировать Ваши ответы
                <input class="knp-prev" type="button" value="Назад" />
        </div>
    </div>
</div>

<style>
    .knp-item {
        display: none;
    }

    .knp-quiz {
        background: rgba(255, 255, 255, 0.7);
        height: 500px;
    }

    .knp-submit.knp-selected {
        background-color: green;
    }

</style>

<script>

    // Model
    var state = {
        'start': {
            canView: true
        },
        '1': {
            canView: false,
            score: []
        },
        '2': {
            canView: false,
            score: []
        },
        '3': {
            canView: false,
            score: []
        },
        '4': {
            canView: false,
            score: []
        },
        '5': {
            canView: false,
            score: []
        },
        '6': {
            canView: false,
            score: []
        },
        'finish': {
            canView: false
        }
    };

    // Business methods
    var storeAnswer = function(el, id) {
        if (!el) return;
        var score = el.data('score');
        if (!score) return;
        state[id].score = score.toString().split(',');
    };

    var calculateResults = function() {
        var score = {},
            results = [];

        for (var idx in state) {
            if (!state[idx].score) continue;
            for (var i = 0; i < state[idx].score.length; i++) {
                score[state[idx].score[i]] || (score[state[idx].score[i]] = 0);
                score[state[idx].score[i]] += 1;
            }
        }

        for (var idx in score) {
            results[score[idx]] || (results[score[idx]] = []);
            results[score[idx]].push(idx);
        }

        return results;
    };

    // DOM methods
    var showItem = function(el) {
        $('.knp-quiz .knp-item').hide();
        var item = $(el);
        var nextBtn = item.find('.knp-next');
        var prevBtn = item.find('.knp-prev');
        if (nextBtn.length) {
            (item.next().length && state[item.next().data('id')].canView)? nextBtn.show() : nextBtn.hide();
        }
        if (prevBtn.length) {
            (item.prev().length && state[item.prev().data('id')].canView)? prevBtn.show() : prevBtn.hide();
        }

        item.fadeIn();

        (item.data('id') === 'finish') && onShowFinish();
    };

    var showNextItem = function(el) {
        var next = el.next();
        if (!next.length || !state[next.data('id')].canView) return;
        showItem(next);
    };

    var showPrevItem = function(el) {
        var prev = el.prev();
        if (!prev.length || !state[prev.data('id')].canView) return;
        showItem(prev);
    };

    var onShowFinish = function() {
        var results = calculateResults();
        var top = results.pop();

        $('.knp-quiz .knp-finish .knp-case-single, .knp-quiz .knp-finish .knp-case-multiple').hide();
        (top.length === 1)?
            $('.knp-quiz .knp-finish .knp-case-single').show() :
            $('.knp-quiz .knp-finish .knp-case-multiple').show();

        $('.knp-quiz .knp-finish .knp-result').hide();
        for (var i = 0; i < top.length; i++) {
            $('.knp-quiz .knp-finish .knp-result[data-id="' + top[i] + '"]').show();
        }
    };

    // Initialization
    $(document).ready(function($){

        // DOM event listeners
        $('.knp-quiz .knp-item .knp-submit').click(function(){
            var item = $(this).parents('.knp-item'),
                nextId = item.next().data('id'),
                id = item.data('id');

            storeAnswer($(this), id);
            item.find('.knp-submit').removeClass('knp-selected');
            $(this).addClass('knp-selected');

            setTimeout(function(){
                nextId && (state[nextId].canView = true);
                showNextItem(item);
            }, 500);
        });

        $('.knp-quiz .knp-prev').click(function(){
            showPrevItem($(this).parents('.knp-item'));
        });

        $('.knp-quiz .knp-next').click(function(){
            showNextItem($(this).parents('.knp-item'));
        });

        // UI initialization
        showItem($('.knp-quiz .knp-item')[0]);
    });

</script>

