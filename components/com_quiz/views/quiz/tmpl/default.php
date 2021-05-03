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
            <div class="knp-submit">
                <input type="button" value="Начать" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="1">
        <div class="knp-panel">
            <div class="knp-question">
                Вопрос1
            </div>
            <div class="knp-answers">
                <div class="knp-answer">Ответ1</div>
                <div class="knp-answer">Ответ2</div>
            </div>
            <div class="knp-submit">
                <input type="button" value="submit" />
            </div>
            <div class="knp-prev">
                <input type="button" value="Назад" />
            </div>

            <div class="knp-next">
                <input type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-step" data-id="2">
        <div class="knp-panel">
            <div class="knp-question">
                Вопрос1
            </div>
            <div class="knp-answers">
                <div class="knp-answer">Ответ1</div>
                <div class="knp-answer">Ответ2</div>
                <div class="knp-answer">Ответ3</div>
                <div class="knp-answer">Ответ4</div>
            </div>
            <div class="knp-submit">
                <input type="button" value="submit" />
            </div>
            <div class="knp-prev">
                <input type="button" value="Назад" />
            </div>

            <div class="knp-next">
                <input type="button" value="Вперед" />
            </div>
        </div>
    </div>

    <div class="knp-item knp-finish" data-id="finish">
        <div class="knp-panel">
            <div>
                Наиболее подходящий способ продвижения - ИНСТА!
            </div>
            <div class="knp-submit">
                <input type="button" value="Заказать продвижение в Инсте прямо сейчас" />
            </div>
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
</style>

<script>

    // Model
    var state = {
        'start': {
            canView: true
        },
        '1': {
            canView: false,
            value: 0
        },
        '2': {
            canView: false,
            value: 0
        },
        'finish': {
            canView: false
        }
    };

    // Business methods
    var calculators = {
        '1': function(el, id) {
            return 1;
        },
        '2': function(el, id) {
            return 1;
        }
    };

    var submit = function(el, id, nextId) {
        calculators[id] && (state[id].value = calculators[id](el, id));
        state[nextId].canView = true;
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

    // Initialization
    $(document).ready(function($){

        // DOM event listeners
        $('.knp-quiz .knp-item .knp-submit input').click(function(){
            var item = $(this).parents('.knp-item');
            submit(item, item.data('id'), item.next().data('id'));
            showNextItem(item);
        });

        $('.knp-quiz .knp-step .knp-prev input').click(function(){
            showPrevItem($(this).parents('.knp-item'));
        });

        $('.knp-quiz .knp-step .knp-next input').click(function(){
            showNextItem($(this).parents('.knp-item'));
        });

        // UI initialization
        showItem($('.knp-quiz .knp-item')[0]);
    });

</script>

