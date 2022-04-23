<!DOCTYPE html>
<html>
  <head>
    <title>Load Details Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <div>
      <form action="/">
        <div class="banner">
       
        </div>
        <p>Load Information</p>
        <div>
            <label>Load Type</label>
            <div>
              <div>
                <input type="radio" value="none" id="radio_1" name="above3mt"/>
                <label for="radio_1" class="radio"><span>Full load</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_2" name="below3mt"/>
                <label for="radio_2" class="radio"><span>Part load</span></label>
              </div>
            </div>
          </div>
       
        <div>
          <label for="source">To: <span>*</span></label>
          <input id="source" type="text" placeholder="Destination City" name="source" required/>
        </div>
        <div>
          <label for="destination">From:<span>*</span></label>
          <input id="address" type="text" placeholder="Source City" name="address" required/>
        </div>
        <div>
          <label for="material">Material<span>*</span></label>
        <select name="material" id="material">
          <option value=""></option>
          <option value=""></option>
          <option value=""></option>
          <option value=""></option>
        </select>
        </div>
        <div>
            <label for="material">Material<span>*</span></label>
          <select name="material" id="material">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
          </div>
        <div>
          <label for="state">State<span>*</span></label>
          <input id="state" type="text" name="state" required/>
        </div>
        <div>
          <label for="zip">Zip<span>*</span></label>
          <input id="zip" type="text" name="zip" required/>
        </div>
        <div>
          <label for="phone">Phone<span>*</span></label>
          <input id="phone" type="number" name="phone" required/>
        </div>
        <div>
          <label for="bdate">Date of Birth<span>*</span></label>
          <input id="bdate" type="date" name="bdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
       
        <div>
          <p>T-Shirt Size</p>
          <select>
            <option selected value="" disabled selected></option>
            <option value="course-type" >Small</option>
            <option value="short-courses">Medium</option>
            <option value="featured-courses">Large</option>
            <option value="undergraduate">Extra Large</option>
          </select>
        </div>
        <div>
          <label>Choose Race</label>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_3" name="race"/>
              <label for="radio_3" class="radio"><span>5k - $25</span></label>
            </div>
            <div>
              <input  type="radio" value="none" id="radio_4" name="race"/>
              <label for="radio_4" class="radio"><span>10K - $25</span></label>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">SUBMIT</button>
        </div>
      </form>
    </div>
  </body>
</html>