<?php 
  
?>
<style>
  <?php include '../../style.css'; ?>
</style>
<div id = 'main-text'>
<h1>Добавление расписания</h1>
</div>
<div id = main-cont>
<form method='post'>
    <p><input
      id = "name_of_group"
      list="GroupList"
      type="text" 
      placeholder="Выберите группу" 
      required/>
    </p>
    <!-- week выводится в формате "2021-W15" -->
    <input id = 'week-select' type="week" placeholder="Выберите неделю" required> 
    <input id = 'add-btn' type='button' value="Добавить">
</form> <!-- загрузка групп из БД -->
<datalist id="GroupList">

<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/connection.php'; // подключаем скрипт

  // подключаемся к серверу
  $link = mysqli_connect($host, $user, $password, $database) 
      or die("Ошибка " . mysqli_error($link));

  // выполняем операции с базой данных
  $query ="SELECT * FROM Groups";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
  if($result)
  {
      while ($row = mysqli_fetch_array($result)) {
        echo '<option value="'.$row['Name'].'">';
      }
  }
  // закрываем подключение
  mysqli_close($link);
?>
</datalist>
</div>

<div id = 'table-space'><table id = "table-one">
  <tr><td class="full">Имя группы</td></tr>
  <tr><td class="full">day_of_week1</td></tr>
  <tr>
    <td>time1</td>
    <td>name_of_class1</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time2</td>
    <td>name_of_class2</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time3</td>
    <td>name_of_class3</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time4</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time5</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time6</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time7</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr><td class="full">day_of_week2</td></tr>
  <tr>
    <td>time1</td>
    <td>name_of_class1</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time2</td>
    <td>name_of_class2</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time3</td>
    <td>name_of_class3</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time4</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time5</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time6</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time7</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr><td class="full">day_of_week3</td></tr>
  <tr>
    <td>time1</td>
    <td>name_of_class1</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time2</td>
    <td>name_of_class2</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time3</td>
    <td>name_of_class3</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time4</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time5</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time6</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time7</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr><td class="full">day_of_week4</td></tr>
  <tr>
    <td>time1</td>
    <td>name_of_class1</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time2</td>
    <td>name_of_class2</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time3</td>
    <td>name_of_class3</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time4</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time5</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time6</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time7</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr><td class="full">day_of_week5</td></tr>
  <tr>
    <td>time1</td>
    <td>name_of_class1</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time2</td>
    <td>name_of_class2</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time3</td>
    <td>name_of_class3</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time4</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time5</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time6</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time7</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr><td class="full">day_of_week6</td></tr>
  <tr>
    <td>time1</td>
    <td>name_of_class1</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time2</td>
    <td>name_of_class2</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time3</td>
    <td>name_of_class3</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>

  </tr>
  <tr>
    <td>time4</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time5</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time6</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
  <tr>
    <td>time7</td>
    <td>name_of_class4</td>
    <td>type</td>
    <td>teacher</td>
    <td>classroom</td>
  </tr>
</table>
</div>



<script src = '../../jquery.js'></script>
<!-- <script src = 'script_add_rasp.js'></script> -->
<script>
  $(document).ready(function () {    
    function tableCreate(){
      let body = document.getElementById('table-space'),
        tbl  = document.createElement('table');
        tbl.appendChild(nameCreate());
        
        for (let i = 1; i < 7; i++){
          tbl.appendChild(dayCreate(i));
          for (let j = 1; j < 7; j++){
            tbl.appendChild(classCreate(i,j));
          }
      }
      
      body.appendChild(tbl);
    }

    function classCreate(number_day,number_class) {
      let _class = document.createElement('tr'); // пара
      let time = document.createElement('td'); // время
      let name = document.createElement('td'); // название пары
      let type = document.createElement('td'); // тип
      let teacher = document.createElement('td'); // препод
      let classroom = document.createElement('td'); // кабинет
      let url = '../../api/info.php';
      // time.innerHTML = 'time'+number_class;
      // name.innerHTML = 'name'+number_class;
      // type.innerHTML = 'type'+number_class;
      // teacher.innerHTML = 'teacher'+number_class;
      // classroom.innerHTML = 'classroom'+number_class;

      $.ajax({
        type: "post",
        url: url,
        data: {number_day:number_day,number_class:number_class},
        dataType: "json",
        success: function (response) {
          console.log('info success');
          console.log(response.err);
          // time.innerHTML = 'time'+response;
          // name.innerHTML = 'name'+response;
          // type.innerHTML = 'type'+response;
          // teacher.innerHTML = 'teacher'+response;
          // classroom.innerHTML = 'classroom'+response;
        },
        error: function(response){
          console.log('info err');
          console.log(response);
        }
      });

      _class.appendChild(time);
      _class.appendChild(name);
      _class.appendChild(type);
      _class.appendChild(teacher);
      _class.appendChild(classroom);
      return _class
    }

    function nameCreate(){
      let name = document.createElement('tr');
      let trname = document.createElement('td');
      trname.setAttribute('colspan',5);
      trname.innerHTML = $('#name_of_group').val();
      name.appendChild(trname)
      return name;
    }

    function dayCreate(number){
      let day = document.createElement('tr');
      let trday = document.createElement('td');
      trday.setAttribute('colspan', 5);
      $.ajax({ // получение дня недели 
        type: "post",
        url: "../../api/date.php",
        data: 'number=' + number,
        dataType: 'text',
        success: function (response) {
          trday.innerHTML = response;
        },
        error:function(responce){
          trday.innerHTML = 'Error'
        }
      });
      day.appendChild(trday);
      return day;
    }

    $('#add-btn').click(function () {
      let week = new Date(document.getElementById('week-select').valueAsDate);
      if ($('#name_of_group').val()!=""){
        tableCreate();
      }
    });
});
</script>