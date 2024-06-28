function confirm(){
    // 创建一个空对象来存储要发送的数据
    var dataToSend = {};
    // 检查每个选项，只将被选中的选项的值添加到 dataToSend 对象中    
    if (document.getElementById("1-1").checked) {dataToSend["Q1"] = 1;}
    else if (document.getElementById("1-2").checked) {dataToSend["Q1"] = 2;}
    else if (document.getElementById("1-3").checked) {dataToSend["Q1"] = 3;}
    else {dataToSend["Q1"] = 0;}
  
    if (document.getElementById("2-1").checked) {dataToSend["Q2"] = 1;}
    else if (document.getElementById("2-2").checked) {dataToSend["Q2"] = 2;}
    else {dataToSend["Q2"] = 0;}
  
    if (document.getElementById("3-1").checked) {dataToSend["Q3"] = 1;}
    else if (document.getElementById("3-2").checked) {dataToSend["Q3"] = 2;}
    else if (document.getElementById("3-3").checked) {dataToSend["Q3"] = 3;}
    else if (document.getElementById("3-4").checked) {dataToSend["Q3"] = 4;}
    else {dataToSend["Q3"] = 0;}
  
    if (document.getElementById("4-1").checked) {dataToSend["Q4"] = 1;}
    else if (document.getElementById("4-2").checked) {dataToSend["Q4"] = 2;}
    else if (document.getElementById("4-3").checked) {dataToSend["Q4"] = 3;}
    else {dataToSend["Q4"] = 0;}
  
    if (document.getElementById("5-1").checked) {dataToSend["Q5"] = 1;}
    else if (document.getElementById("5-2").checked) {dataToSend["Q5"] = 2;}
    else if (document.getElementById("5-3").checked) {dataToSend["Q5"] = 3;}
    else if (document.getElementById("5-4").checked) {dataToSend["Q5"] = 4;}
    else {dataToSend["Q5"] = 0;}
  
    if (document.getElementById("6-1").checked) {dataToSend["Q6"] = 1;}
    else if (document.getElementById("6-2").checked) {dataToSend["Q6"] = 2;}
    else if (document.getElementById("6-3").checked) {dataToSend["Q6"] = 3;}
    else if (document.getElementById("6-4").checked) {dataToSend["Q6"] = 4;}
    else {dataToSend["Q6"] = 0;}
  
    if (document.getElementById("7-1").checked) {dataToSend["Q7"] = 1;}
    else if (document.getElementById("7-2").checked) {dataToSend["Q7"] = 2;}
    else {dataToSend["Q7"] = 0;}
  
    if (document.getElementById("8-1").checked) {dataToSend["Q8"] = 1;}
    else if (document.getElementById("8-2").checked) {dataToSend["Q8"] = 2;}
    else if (document.getElementById("8-3").checked) {dataToSend["Q8"] = 3;}
    else {dataToSend["Q8"] = 0;}
  
    if (document.getElementById("9-1").checked) {dataToSend["Q9"] = 1;}
    else if (document.getElementById("9-2").checked) {dataToSend["Q9"] = 2;}
    else if (document.getElementById("9-3").checked) {dataToSend["Q9"] = 3;}
    else {dataToSend["Q9"] = 0;}
  
    if (document.getElementById("10-1").checked) {dataToSend["Q10"] = 1;}
    else if (document.getElementById("10-2").checked) {dataToSend["Q10"] = 2;}
    else if (document.getElementById("10-3").checked) {dataToSend["Q10"] = 3;}
    else if (document.getElementById("10-4").checked) {dataToSend["Q10"] = 4;}
    else {dataToSend["Q10"] = 0;}
  
    if (document.getElementById("11-1").checked) {dataToSend["Q11"] = 1;}
    else if (document.getElementById("11-2").checked) {dataToSend["Q11"] = 2;}
    else if (document.getElementById("11-3").checked) {dataToSend["Q11"] = 3;}
    else {dataToSend["Q11"] = 0;}
  
    if (document.getElementById("12-1").checked) {dataToSend["Q12"] = 1;}
    else if (document.getElementById("12-2").checked) {dataToSend["Q12"] = 2;}
    else {dataToSend["Q12"] = 0;}
  
    if (document.getElementById("13-1").checked) {dataToSend["Q13"] = 1;}
    else if (document.getElementById("13-2").checked) {dataToSend["Q13"] = 2;}
    else if (document.getElementById("13-3").checked) {dataToSend["Q13"] = 3;}
    else {dataToSend["Q13"] = 0;}
  
    if (document.getElementById("14-1").checked) {dataToSend["Q14"] = 1;}
    else if (document.getElementById("14-2").checked) {dataToSend["Q14"] = 2;}
    else if (document.getElementById("14-3").checked) {dataToSend["Q14"] = 3;}
    else {dataToSend["Q14"] = 0;}
  
    if (document.getElementById("15-1").checked) {dataToSend["Q15"] = 1;}
    else if (document.getElementById("15-2").checked) {dataToSend["Q15"] = 2;}
    else if (document.getElementById("15-3").checked) {dataToSend["Q15"] = 3;}
    else {dataToSend["Q15"] = 0;}
  
    if (document.getElementById("16-1").checked) {dataToSend["Q16"] = 1;}
    else if (document.getElementById("16-2").checked) {dataToSend["Q16"] = 2;}
    else if (document.getElementById("16-3").checked) {dataToSend["Q16"] = 3;}
    else {dataToSend["Q16"] = 0;}
  
    if (document.getElementById("17-1").checked) {dataToSend["Q17"] = 1;}
    else if (document.getElementById("17-2").checked) {dataToSend["Q17"] = 2;}
    else if (document.getElementById("17-3").checked) {dataToSend["Q17"] = 3;}
    else {dataToSend["Q17"] = 0;}
  
    if (document.getElementById("18-1").checked) {dataToSend["Q18"] = 1;}
    else if (document.getElementById("18-2").checked) {dataToSend["Q18"] = 2;}
    else if (document.getElementById("18-3").checked) {dataToSend["Q18"] = 3;}
    else if (document.getElementById("18-4").checked) {dataToSend["Q18"] = 4;}
    else if (document.getElementById("18-5").checked) {dataToSend["Q18"] = 5;}
    else {dataToSend["Q18"] = 0;}
     
    if (document.getElementById("19-1").checked) {dataToSend["Q19"] = 1;}
    else if (document.getElementById("19-2").checked) {dataToSend["Q19"] = 2;}
    else if (document.getElementById("19-3").checked) {dataToSend["Q19"] = 3;}
    else if (document.getElementById("19-4").checked) {dataToSend["Q19"] = 4;}
    else if (document.getElementById("19-5").checked) {dataToSend["Q19"] = 5;}
    else {dataToSend["Q19"] = 0;}
  
    if (document.getElementById("20-1").checked) {dataToSend["Q20"] = 1;}
    else if (document.getElementById("20-2").checked) {dataToSend["Q20"] = 2;}
    else if (document.getElementById("20-3").checked) {dataToSend["Q20"] = 3;}
    else if (document.getElementById("20-4").checked) {dataToSend["Q20"] = 4;}
    else if (document.getElementById("20-5").checked) {dataToSend["Q20"] = 5;}
    else {dataToSend["Q20"] = 0;}
  
    if (document.getElementById("21-1").checked) {dataToSend["Q21"] = 1;}
    else if (document.getElementById("21-2").checked) {dataToSend["Q21"] = 2;}
    else if (document.getElementById("21-3").checked) {dataToSend["Q21"] = 3;}
    else if (document.getElementById("21-4").checked) {dataToSend["Q21"] = 4;}
    else {dataToSend["Q21"] = 0;}
  
    if (document.getElementById("22-1").checked) {dataToSend["Q22"] = 1;}
    else if (document.getElementById("22-2").checked) {dataToSend["Q22"] = 2;}
    else if (document.getElementById("22-3").checked) {dataToSend["Q22"] = 3;}
    else if (document.getElementById("22-4").checked) {dataToSend["Q22"] = 4;}
    else {dataToSend["Q22"] = 0;}
  
    if (document.getElementById("23-1").checked) {dataToSend["Q23"] = 1;}
    else if (document.getElementById("23-2").checked) {dataToSend["Q23"] = 2;}
    else if (document.getElementById("23-3").checked) {dataToSend["Q23"] = 3;}
    else if (document.getElementById("23-4").checked) {dataToSend["Q23"] = 4;}
    else {dataToSend["Q23"] = 0;}
  
    if (document.getElementById("24-1").checked) {dataToSend["Q24"] = 1;}
    else if (document.getElementById("24-2").checked) {dataToSend["Q24"] = 2;}
    else if (document.getElementById("24-3").checked) {dataToSend["Q24"] = 3;}
    else if (document.getElementById("24-4").checked) {dataToSend["Q24"] = 4;}
    else if (document.getElementById("24-5").checked) {dataToSend["Q24"] = 5;}
    else {dataToSend["Q24"] = 0;}
  
    if (document.getElementById("25-1").checked) {dataToSend["Q25"] = 1;}
    else if (document.getElementById("25-2").checked) {dataToSend["Q25"] = 2;}
    else if (document.getElementById("25-3").checked) {dataToSend["Q25"] = 3;}
    else if (document.getElementById("25-4").checked) {dataToSend["Q25"] = 4;}
    else {dataToSend["Q25"] = 0;}
  
    if (document.getElementById("26-1").checked) {dataToSend["Q26"] = 1;}
    else if (document.getElementById("26-2").checked) {dataToSend["Q26"] = 2;}
    else if (document.getElementById("26-3").checked) {dataToSend["Q26"] = 3;}
    else if (document.getElementById("26-4").checked) {dataToSend["Q26"] = 4;}
    else {dataToSend["Q26"] = 0;}
  
    if (document.getElementById("27-1").checked) {dataToSend["Q27"] = 1;}
    else if (document.getElementById("27-2").checked) {dataToSend["Q27"] = 2;}
    else if (document.getElementById("27-3").checked) {dataToSend["Q27"] = 3;}
    else {dataToSend["Q27"] = 0;}
  
    if (document.getElementById("28-1").checked) {dataToSend["Q28"] = 1;}
    else if (document.getElementById("28-2").checked) {dataToSend["Q28"] = 2;}
    else if (document.getElementById("28-3").checked) {dataToSend["Q28"] = 3;}
    else if (document.getElementById("28-4").checked) {dataToSend["Q28"] = 4;}
    else if (document.getElementById("28-5").checked) {dataToSend["Q28"] = 5;}
    else {dataToSend["Q28"] = 0;}
  
    if (document.getElementById("29-1").checked) {dataToSend["Q29"] = 1;}
    else if (document.getElementById("29-2").checked) {dataToSend["Q29"] = 2;}
    else if (document.getElementById("29-3").checked) {dataToSend["Q29"] = 3;}
    else if (document.getElementById("29-4").checked) {dataToSend["Q29"] = 4;}
    else if (document.getElementById("29-5").checked) {dataToSend["Q29"] = 5;}
    else {dataToSend["Q29"] = 0;}

    if (document.getElementById("30-1").checked) {dataToSend["Q30"] = 1;}
    else if (document.getElementById("30-2").checked) {dataToSend["Q30"] = 2;}
    else if (document.getElementById("30-3").checked) {dataToSend["Q30"] = 3;}
    else if (document.getElementById("30-4").checked) {dataToSend["Q30"] = 4;}
    else if (document.getElementById("30-5").checked) {dataToSend["Q30"] = 5;}
    else {dataToSend["Q30"] = 0;}

    $.ajax({
        type: "POST",
        url: "php/4SeasonQuiz.php",
        data: dataToSend,
        success: function(data) {
            // 将返回的 JSON 格式数据解析为 JavaScript 对象
            var scores = JSON.parse(data);
    
            // 定义最大得分，用于计算线条长度比例
            var maxScore = 100;
    
            // 计算得分对应的线条长度，假设最大长度为300px
            var springLineWidth = (scores.spring / maxScore) * 300 + "px";
            var summerLineWidth = (scores.summer / maxScore) * 300 + "px";
            var autumnLineWidth = (scores.autumn / maxScore) * 300 + "px";
            var winterLineWidth = (scores.winter / maxScore) * 300 + "px";
    
            // 在页面上显示各季节得分及线条
            document.getElementById("result").innerHTML = 
                '<div class="score-container"><span class="score spring-score">春</span><div class="score-line spring-line" style="width: ' + springLineWidth + ';"></div><span class="score spring-score">' + scores.spring + '</span></div>' +
                '<div class="score-container"><span class="score summer-score">夏</span><div class="score-line summer-line" style="width: ' + summerLineWidth + ';"></div><span class="score summer-score">' + scores.summer + '</span></div>' +
                '<div class="score-container"><span class="score autumn-score">秋</span><div class="score-line autumn-line" style="width: ' + autumnLineWidth + ';"></div><span class="score autumn-score">' + scores.autumn + '</span></div>' +
                '<div class="score-container"><span class="score winter-score">冬</span><div class="score-line winter-line" style="width: ' + winterLineWidth + ';"></div><span class="score winter-score">' + scores.winter + '</span></div>';
        },
        error: function(jqXHR) {
            alert("發生錯誤 狀態:" + jqXHR.readyState + "    " + jqXHR.status);
        }
    });
    
    
}  


