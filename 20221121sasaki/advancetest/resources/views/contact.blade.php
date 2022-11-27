<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widthz, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COACHTECH</title>
  <style>
    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      line-height: 1;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    nav ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: "";
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color: #ff9;
      color: #000;
      text-decoration: none;
    }

    /* change colours to suit your needs */
    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* change border colour to suit your needs */
    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    }


    .bold {
      font-weight: bold;
    }

    .flex {
      display: flex;
    }

    .between {
      justify-content: space-between;
    }

    .mt-10 {
      margin-top: 10px;
    }

    .mt-5 {
      margin-top: 5px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .mr-40 {
      margin-right: 40px;
    }

    .wide {
      width: 100%;
    }

    .width-45 {
      width: 45%;
    }

    .visually-hidden {
      position: absolute;
      white-space: nowrap;
      width: 1px;
      height: 1px;
      overflow: hidden;
      border: 0;
      padding: 0;
      clip: rect(0 0 0 0);
      clip-path: inset(50%);
      margin: -1px;
    }

    body {
      padding: 30px;
    }

    span {
      color: red;
    }

    h1 {
      text-align: center;
      font-size: 30px;
    }

    .wrap {
      width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    li {
      display: flex;
      margin-bottom: 30px;
    }

    .title {
      width: 40%;
      font-weight: bold;
      font-size: 14px;
    }

    .text {
      padding: 10px;
      border: solid 1px gray;
      border-radius: 5px;
      font-size: 14px;
      vertical-align: middle;
      resize: none;
    }

    .example {
      margin-top: 10px;
      color: gray;
    }

    .radio-btn {
      position: relative;
      cursor: pointer;
      padding-left: 60px;
    }

    .radio-btn::before,
    .radio-btn::after {
      content: "";
      display: block;
      border-radius: 50%;
      position: absolute;
      transform: translateY(-50%);
      top: 50%;
    }

    .radio-btn::before {
      background-color: #fff;
      border: 1px solid gray;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      left: 5px;
    }

    .radio-btn::after {
      background-color: black;
      border-radius: 50%;
      opacity: 0;
      width: 10px;
      height: 10px;
      left: 20px
    }

    .radio-input:checked+.radio-btn::after {
      opacity: 1;
    }

    .mark {
      margin: 10px;
    }

    .center {
      text-align: center;
    }

    .btn {
      text-align: center;
      color: white;
      background-color: black;
      padding: 10px 50px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    /* 入力エラー時の表示 */
    .field-invalid::before {
      content: "このフィールドは必須です。";
      display: block;
      color: red;
    }

    .field-invalid input.field-required,
    .field-invalid textarea.field-required {
      border: 1px solid red;
    }
  </style>

</head>

<body>
  <div class="wrap">
    <h1 class="mb-30">お問い合わせ</h1>
    <form method="post" action="/contact/submit">
      @csrf
      <ul class="formTable">
        <li>
          <p class="title mt-10">お名前<span>※</span></p>
          <div class="box_det wide flex between">
            <div class="block-form-required box_br width-45">
              <input type="text" class="field-required wide text" name="familyname" />
              <p class="example">例）山田</p>
              @if ($errors->has('familyname'))
              <p>{{$errors->first('familyname')}}</p>
              @endif
            </div>
            <div class="block-form-required box_br width-45">
              <input type="text" class="field-required wide text" name="firstname" />
              <p class="example">例）太郎</p>
              @if ($errors->has('firstname'))
              <p>{{$errors->first('firstname')}}</p>
              @endif
            </div>
          </div>
        </li>
        <li>
          <p class="title mt-5">性別<span>※</span></p>
          <div class="box_det wide flex">
            <div class="box_br mr-40">
              <input class="radio-input visually-hidden" type="radio" name="gender" value="1" id="male" checked />
              <label class="radio-btn bold" for="male">男性</label>
            </div>
            <div class="box_br">
              <input class="radio-input visually-hidden" type="radio" name="gender" value="2" id="female" />
              <label class="radio-btn bold" for="female">女性</label>
            </div>
            @if ($errors->has('gender'))
            <p>{{$errors->first('gender')}}</p>
            @endif
          </div>
        </li>
        <li>
          <p class="title mt-10">メールアドレス<span>※</span></p>
          <div class="box_br wide">
            <input type="text" class="wide text" name="email" />
            <p class="example">例）test@example.com</p>
            @if ($errors->has('email'))
            <p>{{$errors->first('email')}}</p>
            @endif
          </div>
        </li>
        <li>
          <p class="title mt-10">郵便番号<span>※</span></p>
          <div class="box_det wide flex">
            <p class="mark bold">〒</p>
            <div class="box_br wide">
              <input type="text" class="wide text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" />
              <p class="example">例）123-4567</p>
              @if ($errors->has('postcode'))
              <p>{{$errors->first('postcode')}}</p>
              @endif
            </div>
          </div>
        </li>
        <li>
          <p class="title mt-10">住所<span>※</span></p>
          <div class="box_br wide">
            <input type="text" class="wide text" name="address" />
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            @if ($errors->has('address'))
            <p>{{$errors->first('address')}}</p>
            @endif
          </div>
        </li>
        <li>
          <p class="title mt-10">建物名</p>
          <div class="box_br wide">
            <input type="text" class="wide text" name="building" />
            <p class="example">例）千駄ヶ谷マンション101</p>
            @if ($errors->has('building'))
            <p>{{$errors->first('building')}}</p>
            @endif
          </div>
        </li>
        <li>
          <p class="title mt-10">ご意見<span>※</span></p>
          <div class="box_br wide">
            <textarea class="wide text" name="opinion" cols="50" rows="10"></textarea>
            @if ($errors->has('opinion'))
            <p>{{$errors->first('opinion')}}</p>
            @endif
          </div>
        </li>
      </ul>
      <p class="center">
        <input class="btn" type="submit" value="確認" />
      </p>
    </form>
  </div>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>

</html>