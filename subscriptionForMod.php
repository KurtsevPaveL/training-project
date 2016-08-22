<?php

//  //OLD FILE CONTENT START
//
//function add_subscribe()
//{
//    mysql_query('insert into prikol_subscribe (name,email) values(\'' . $_POST['subscr_fio'] . '\',\'' . $_POST['subscr_email'] . '\')');
//}
//
//if (isset($_POST['subscr_fio']))
//    add_subscribe();
//else
//    echo '
//<div id="subs"><form method="post" action=""><h3>Подписка на рассылку</h3><label> Имя <input type="text" name="subscr_fio"></label><label>e-mail <input type="text" name="subscr_email"></label> <input type="submit" value="Подписаться"></form></div>
//';
//
//
//  //OLD FILE CONTENT END

/*
 * Configurations:
 */
$dbTableName = 'prikol_subscribe'; //Database configurations:
$cookieName = "subscr_fio"; //Cookie conigurations:
$cookieTrueValue = "subscribed"; //Cookie true value
$cookieExpireDate = 157680000; //5 years cookie expire
/*
 * Incoming subscription form data and incoming cookie:
 */
$submitForm = $_POST['subscriptionForm'];
$subscriptionFormFio = mysql_real_escape_string($_POST['subscr_fio']); //Subscription form FIO

$subscriptionFormEmail = mysql_real_escape_string($_POST['subscr_email']); //Subscription form EMAIL
$incomingCookie = $_COOKIE[$cookieName]; //Incoming COOKIE

function showThankBlock()
{
    /*
     * Displaying "Thank you for subscription!"
     */
    echo '
        <div id="subs">
        <h3>Рассылка</h3>
        Вы уже подписаны!
        Благодарим вас за подписку на наши новости и акции!
        </div>
    ';
}

function subscriptionFormHandler($submitForm, $dbTableName, $subscriptionFormFio, $subscriptionFormEmail, $cookieName, $cookieTrueValue, $cookieExpireDate)
{
    /*
     * Working with form
     */
    if ($submitForm && $subscriptionFormFio && $subscriptionFormEmail) {
        echo $dbTableName;
        if (
            mysql_query(
                'insert into '
                . $dbTableName
                . ' (name, email) '
                . 'values("'
                . $subscriptionFormFio
                . '","'
                . $subscriptionFormEmail
                . '")')
        ) {
            setcookie($cookieName, $cookieTrueValue, time() + $cookieExpireDate);
            echo '
                <div id="subs">
                <h3>Рассылка</h3>
                <h4>Благодарим Вас за подписку на наши новости!</h4>
                Мы не передаем Ваши данные третьим лицам,<br>
                поэтому Вы можете не беспокоиться за предоставленную информацию!
                </div>
            ';
        } else {
            echo '
                <div id="subs">
                <h5>Извините, возникли трудности при работе с сервером!</h5>
                Пожалуйста, повторите попытку позже!
                </div>
            ';
            // TODO: Write a script which will send a mail to the developer with a mistake log
        }
    } else {
        echo '
            <div id="subs">
                <h3>Рассылка</h3>
                <span style="font-size:13px">
                    Периодически мы информируем клиентов о новых поступлениях и проходящих акциях.
                </span>
                <form method="post" action="#">
                    <label> Имя <input type="text" class="form-control input-sm" name="subscr_fio"></label>
                    <label>e-mail <input type="text" class="form-control input-sm" name="subscr_email"></label>
                    <input type="submit" class="btn btn-sm btn-success" name="subscriptionForm" value="Подписаться!">
                </form>
            </div>
        ';
    }
}

function checkClientsSubscription($dbTableName, $cookieName, $cookieTrueValue, $cookieExpireDate, $submitForm, $subscriptionFormFio, $subscriptionFormEmail, $incomingCookie)
{
    if ($incomingCookie) {
        if ($incomingCookie == $cookieTrueValue) {
            showThankBlock();
        }
    } else {
        subscriptionFormHandler($submitForm, $dbTableName, $subscriptionFormFio, $subscriptionFormEmail, $cookieName, $cookieTrueValue, $cookieExpireDate);
    }
}

/*
 * To run application call the only function checkClientsSubscription():
 */
checkClientsSubscription($dbTableName, $cookieName, $cookieTrueValue, $cookieExpireDate, $submitForm, $subscriptionFormFio, $subscriptionFormEmail, $incomingCookie);
