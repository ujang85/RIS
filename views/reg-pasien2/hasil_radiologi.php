<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="admin2" />
      <meta name="company" content="Microsoft Corporation" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style2 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style2 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style3 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style3 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style5 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style5 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style6 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style6 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style7 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style7 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style8 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style8 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style9 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style9 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style10 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style10 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style11 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style12 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style12 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style15 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style15 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style16 { vertical-align:top; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style16 { vertical-align:top; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style17 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style17 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:2px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style18 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style18 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style19 { vertical-align:top; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style19 { vertical-align:top; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style20 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style20 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style21 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style21 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style23 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style23 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style24 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style24 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style26 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style26 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style27 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style27 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style28 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style28 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style29 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style29 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style30 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style30 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style31 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style31 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style32 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial Black'; font-size:14pt; background-color:white }
      th.style32 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial Black'; font-size:14pt; background-color:white }
      td.style33 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial Black'; font-size:14pt; background-color:white }
      th.style33 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial Black'; font-size:14pt; background-color:white }
      td.style34 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style34 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      table.sheet0 col.col0 { width:24.39999972pt }
      table.sheet0 col.col1 { width:93.53333226pt }
      table.sheet0 col.col2 { width:6.09999993pt }
      table.sheet0 col.col3 { width:149.78888717pt }
      table.sheet0 col.col4 { width:34.56666627pt }
      table.sheet0 col.col5 { width:56.93333268pt }
      table.sheet0 col.col6 { width:24.39999972pt }
      table.sheet0 col.col7 { width:56.93333268pt }
      table.sheet0 col.col8 { width:10.84444432pt }
      table.sheet0 col.col9 { width:55.57777714pt }
      table.sheet0 col.col10 { width:6.09999993pt }
      table.sheet0 col.col11 { width:42pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:22.5pt }
      table.sheet0 tr.row3 { height:15.75pt }
      table.sheet0 tr.row4 { height:15.75pt }
      table.sheet0 tr.row8 { height:15.75pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <tbody>
          <tr class="row0">
            <td class="column0 style32 s style33" colspan="11">RUMAH SAKIT JOGJA</td>
            <td class="column11 style10 null"></td>
          </tr>
          <tr class="row1">
            <td class="column0 style34 s style24" colspan="11">Jl. Wirosaban No.1 Yogyakarta  Kode Pos 55162 Telp:(0274)371195</td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row2">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row3">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row4">
            <td class="column0 style4 null"></td>
            <td class="column1 style29 s style31" colspan="5">RUMAH SAKIT JOGJA</td>
            <td class="column6 style1 null"></td>
            <td class="column7 style25 s style26" colspan="5">HASIL PEMERIKSAAN</td>
          </tr>
          <tr class="row5">
            <td class="column0 style4 null"></td>
            <td class="column1 style12 s">NO.RONTGEN</td>
            <td class="column2 style1 s">:</td>
            <td class="column3 style1 s"><?php echo $model->id_kunjungan; ?></td>
            <td class="column4 style20 s">TGL       :</td>
            <td class="column5 style13 n"><?php echo Yii::$app->formatter->asDatetime($model->tgl_kunjungan, 'php:d-m-Y'); ?></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style27 s style28" colspan="5">&nbsp;RADIODIAGNOSTIK/USG</td>
          </tr>
          <tr class="row6">
            <td class="column0 style4 null"></td>
            <td class="column1 style12 s">NAMA</td>
            <td class="column2 style1 s">:</td>
            <td class="column3 style1 null"><?php echo $model->nama; ?></td>
            <td class="column4 style20 s">UMUR:</td>
            <td class="column5 style14 s"><?php echo $model->umur_tahun; ?> TH</td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 s">NO.URUT</td>
            <td class="column8 style1 s">:</td>
            <td class="column9 style1 n">4</td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 s"><?php echo $model->jaminan->nama_status; ?></td>
          </tr>
          <tr class="row7">
            <td class="column0 style4 null"></td>
            <td class="column1 style12 s">TGL LAHIR</td>
            <td class="column2 style1 s">:</td>
            <td class="column3 style1 null"><?php echo $model->tgl_lahir; ?></td>
            <td class="column4 style20 s">SEX       :</td>
            <td class="column5 style14 s"><?php echo $model->kelamin->gender; ?></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 s">NO.CM</td>
            <td class="column8 style1 s">:</td>
            <td class="column9 style1 n"><?php echo $model->no_cm; ?></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row8">
            <td class="column0 style4 null"></td>
            <td class="column1 style19 s">PEMERIKSAAN</td>
            <td class="column2 style15 s"></td>
            <td class="column3 style16 s"><?php  echo $hasil; ?></td>
            <td class="column4 style15 null"></td>
            <td class="column5 style17 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 s">DATANG</td>
            <td class="column8 style1 s">:</td>
            <td class="column9 style11 n"><?php echo Yii::$app->formatter->asTime($model->tgl_kunjungan, 'php:H:i:s'); ?></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row9">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 s">SELESAI</td>
            <td class="column8 style1 s">:</td>
            <td class="column9 style11 n">8:00</td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row10">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 s">POLI/BANGSAL</td>
            <td class="column2 style1 s">:</td>
            <td class="column3 style1 s"><?php echo $model->klinik_asal; ?></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 s">DOKTER</td>
            <td class="column2 style1 s">:</td>
            <td class="column3 style1 s"><?php echo $model->pegawai2->nama_pegawai; ?></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style4 null"></td>
            <td class="column1 style6 s">Ts.     Dr</td>
            <td class="column2 style1 s">:</td>
            <td class="column3 style23 s style23" colspan="7"><?php echo $model->hasil_bacaan; ?></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style4 null"></td>
            <td class="column1 style3 s">KESAN</td>
            <td class="column2 style22 s">:</td>
            <td class="column3 style23 s style23" colspan="7"><?php echo $model->kesan; ?></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row14">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style24 s style24" colspan="5">DOKTER RADIOLOGI</td>
            <td class="column10 style21 null"></td>
            <td class="column11 style7 null"></td>
          </tr>
          <tr class="row15">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style5 null"></td>
          </tr>
          <tr class="row17">
            <td class="column0 style4 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style24 s style24" colspan="5"><?php echo $model->pegawai2->nama_pegawai; ?></td>
            <td class="column10 style18 null"></td>
            <td class="column11 style7 null"></td>
          </tr>
          <tr class="row18">
            <td class="column0 style8 null"></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style9 null"></td>
          </tr>
        </tbody>
    </table>
  </body>
</html>
