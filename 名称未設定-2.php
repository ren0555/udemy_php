<script type="text/javascript">
    var alert_all =[];
    function check(){
        if(form.name1.value == ""){
            alert_all.push("名前（姓）を入力してください");
        }
        if(form.name2.value == ""){
            alert_all.push("名前（名）を入力してください");
        }
        if(form.name3.value == ""){
            alert_all.push("カナ（姓）を入力してください");
        }
        if(form.name4.value == ""){
            alert_all.push("カナ（名）を入力してください");
        }
        if(form.mail.value == ""){
            alert_all.push("メールアドレスを入力してください")
        }
        if(form.password.value == ""){
            alert_all.push("パスワードを入力してください");
        }
        if(form.yubin.value == ""){
            alert_all.push("郵便番号を入力してください");
        }
        if(form.prefecture.value=="選択してください"){
            alert_all.push("都道府県を選択してください");
        }
        if(form.sikutyouson.value == ""){
            alert_all.push("住所(市区町村)を入力してください");
        }
        if(form.banti.value == ""){
            alert_all.push("住所(番地)を入力してください");
        }
        if(form.kengen.value=="選択してください"){
            alert_all.push("アカウント権限を選択してください");
        }
        if(document.form.seibetu[0].checked || document.form.seibetu[1].checked){
            }else{
                 alert_all.push("性別が選択されていません");
            }
        if(alert_all==""){
            return true;
        }else if{
            alert(alert_all);
            return false;
        }
    </script>