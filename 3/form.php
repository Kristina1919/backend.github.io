<head>
    <meta charset="utf-8" />

    <title>Дз 3</title>
    <link rel="stylesheet" media="all" href="style.css" />
</head>
<form action="index.php" id="my-formcarry" accept-charset="UTF-8" class="main" method="POST">
                                        <input style="margin-bottom : 1em" id="formname"type="text" name="fio" placeholder="ФИО">
                                        <input style="margin-bottom : 1em;margin-top : 1em"id="formmail"  type="email" name="email" placeholder="Почта">
                                        <label>
                                            Дата рождения:<br />
                                            <input id="dr" name="birthday"
                                              value=""
                                              type="number" />
                                        </label><br />
                                  
                                          Выберите пол:<br />
                                        <label><input type="radio"
                                          name="radio2" value="man" />
                                          М</label>
                                        <label><input type="radio"
                                          name="radio2" value="woman" />
                                          Ж</label>
                                          <label><input type="radio"
                                            name="radio2" value="idk" />
                                            Другое</label><br />
                                  
                                            Количество конечностей :<br />
                                        <label><input type="radio"
                                          name="radio1" value="0" />
                                          0</label>
                                        <label><input type="radio"
                                          name="radio1" value="1" />
                                          1</label>
                                        <label><input type="radio"
                                            name="radio1" value="2" />
                                            2</label>
                                        <label><input type="radio"
                                              name="radio1" value="3" />
                                              3</label>
                                        <label><input type="radio"
                                            name="radio1" value="4" />
                                            4</label>
                                        <label><input type="radio"
                                            name="radio1" value="5" />
                                            5</label><br>
                                  
                                        <label>
                                            Способности:
                                            <br />
                                            <select id="sp" name="select1[]"
                                                multiple="multiple">
                                                <option value="1">Бессмертие</option>
                                                <option value="1" >Прохождение сквозь стены</option>
                                                <option value="1">Левитация</option>
                                                <option value="1">Супер разум</option>
                                                <option value="1" >Супер сила</option>
                                            </select>
                                            </label><br />
                                  
                                        <label >
                                        Ваша биография: <br />
                                        <textarea id="biog" name="textarea1" placeholder="Биография"></textarea>
                                        </label ><br />
                                  
                                        <label><input style="margin-bottom : 1em;margin-top : 1em;" id="formcheck"type="checkbox" name="checkbox" value="1">Согласие на обработку личных данных</label>
                                        
                                        <input type="submit"  style="margin-bottom : -1em"id="formsend" class="buttonform" value="Send">
</form>
