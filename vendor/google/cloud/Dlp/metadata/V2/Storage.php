<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace GPBMetadata\Google\Privacy\Dlp\V2;

class Storage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac0240a23676f6f676c652f707269766163792f646c702f76322f73746f" .
            "726167652e70726f746f1215676f6f676c652e707269766163792e646c70" .
            "2e76321a19676f6f676c652f6170692f7265736f757263652e70726f746f" .
            "1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e7072" .
            "6f746f22180a08496e666f54797065120c0a046e616d6518012001280922" .
            "4b0a0a53746f72656454797065120c0a046e616d65180120012809122f0a" .
            "0b6372656174655f74696d6518022001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d7022c80b0a0e437573746f6d496e66" .
            "6f5479706512320a09696e666f5f7479706518012001280b321f2e676f6f" .
            "676c652e707269766163792e646c702e76322e496e666f5479706512350a" .
            "0a6c696b656c69686f6f6418062001280e32212e676f6f676c652e707269" .
            "766163792e646c702e76322e4c696b656c69686f6f6412460a0a64696374" .
            "696f6e61727918022001280b32302e676f6f676c652e707269766163792e" .
            "646c702e76322e437573746f6d496e666f547970652e44696374696f6e61" .
            "72794800123c0a05726567657818032001280b322b2e676f6f676c652e70" .
            "7269766163792e646c702e76322e437573746f6d496e666f547970652e52" .
            "656765784800124d0a0e737572726f676174655f7479706518042001280b" .
            "32332e676f6f676c652e707269766163792e646c702e76322e437573746f" .
            "6d496e666f547970652e537572726f6761746554797065480012380a0b73" .
            "746f7265645f7479706518052001280b32212e676f6f676c652e70726976" .
            "6163792e646c702e76322e53746f726564547970654800124c0a0f646574" .
            "656374696f6e5f72756c657318072003280b32332e676f6f676c652e7072" .
            "69766163792e646c702e76322e437573746f6d496e666f547970652e4465" .
            "74656374696f6e52756c65124b0a0e6578636c7573696f6e5f7479706518" .
            "082001280e32332e676f6f676c652e707269766163792e646c702e76322e" .
            "437573746f6d496e666f547970652e4578636c7573696f6e547970651ac8" .
            "010a0a44696374696f6e617279124e0a09776f72645f6c69737418012001" .
            "280b32392e676f6f676c652e707269766163792e646c702e76322e437573" .
            "746f6d496e666f547970652e44696374696f6e6172792e576f72644c6973" .
            "74480012450a12636c6f75645f73746f726167655f706174681803200128" .
            "0b32272e676f6f676c652e707269766163792e646c702e76322e436c6f75" .
            "6453746f726167655061746848001a190a08576f72644c697374120d0a05" .
            "776f72647318012003280942080a06736f757263651a2f0a055265676578" .
            "120f0a077061747465726e18012001280912150a0d67726f75705f696e64" .
            "657865731802200328051a0f0a0d537572726f67617465547970651abe04" .
            "0a0d446574656374696f6e52756c6512570a0c686f74776f72645f72756c" .
            "6518012001280b323f2e676f6f676c652e707269766163792e646c702e76" .
            "322e437573746f6d496e666f547970652e446574656374696f6e52756c65" .
            "2e486f74776f726452756c6548001a380a0950726f78696d69747912150a" .
            "0d77696e646f775f6265666f726518012001280512140a0c77696e646f77" .
            "5f61667465721802200128051a82010a144c696b656c69686f6f6441646a" .
            "7573746d656e74123d0a1066697865645f6c696b656c69686f6f64180120" .
            "01280e32212e676f6f676c652e707269766163792e646c702e76322e4c69" .
            "6b656c69686f6f644800121d0a1372656c61746976655f6c696b656c6968" .
            "6f6f641802200128054800420c0a0a61646a7573746d656e741a8c020a0b" .
            "486f74776f726452756c6512420a0d686f74776f72645f72656765781801" .
            "2001280b322b2e676f6f676c652e707269766163792e646c702e76322e43" .
            "7573746f6d496e666f547970652e526567657812500a0970726f78696d69" .
            "747918022001280b323d2e676f6f676c652e707269766163792e646c702e" .
            "76322e437573746f6d496e666f547970652e446574656374696f6e52756c" .
            "652e50726f78696d69747912670a156c696b656c69686f6f645f61646a75" .
            "73746d656e7418032001280b32482e676f6f676c652e707269766163792e" .
            "646c702e76322e437573746f6d496e666f547970652e446574656374696f" .
            "6e52756c652e4c696b656c69686f6f6441646a7573746d656e7442060a04" .
            "74797065224b0a0d4578636c7573696f6e54797065121e0a1a4558434c55" .
            "53494f4e5f545950455f554e5350454349464945441000121a0a16455843" .
            "4c5553494f4e5f545950455f4558434c554445100142060a047479706522" .
            "170a074669656c644964120c0a046e616d6518012001280922370a0b5061" .
            "72746974696f6e496412120a0a70726f6a6563745f696418022001280912" .
            "140a0c6e616d6573706163655f6964180420012809221e0a0e4b696e6445" .
            "787072657373696f6e120c0a046e616d651801200128092281010a104461" .
            "746173746f72654f7074696f6e7312380a0c706172746974696f6e5f6964" .
            "18012001280b32222e676f6f676c652e707269766163792e646c702e7632" .
            "2e506172746974696f6e496412330a046b696e6418022001280b32252e67" .
            "6f6f676c652e707269766163792e646c702e76322e4b696e644578707265" .
            "7373696f6e225d0a18436c6f756453746f72616765526567657846696c65" .
            "53657412130a0b6275636b65745f6e616d6518012001280912150a0d696e" .
            "636c7564655f726567657818022003280912150a0d6578636c7564655f72" .
            "6567657818032003280922ec030a13436c6f756453746f726167654f7074" .
            "696f6e7312440a0866696c655f73657418012001280b32322e676f6f676c" .
            "652e707269766163792e646c702e76322e436c6f756453746f726167654f" .
            "7074696f6e732e46696c65536574121c0a1462797465735f6c696d69745f" .
            "7065725f66696c6518042001280312240a1c62797465735f6c696d69745f" .
            "7065725f66696c655f70657263656e7418082001280512330a0a66696c65" .
            "5f747970657318052003280e321f2e676f6f676c652e707269766163792e" .
            "646c702e76322e46696c6554797065124e0a0d73616d706c655f6d657468" .
            "6f6418062001280e32372e676f6f676c652e707269766163792e646c702e" .
            "76322e436c6f756453746f726167654f7074696f6e732e53616d706c654d" .
            "6574686f64121b0a1366696c65735f6c696d69745f70657263656e741807" .
            "200128051a5f0a0746696c65536574120b0a0375726c1801200128091247" .
            "0a0e72656765785f66696c655f73657418022001280b322f2e676f6f676c" .
            "652e707269766163792e646c702e76322e436c6f756453746f7261676552" .
            "6567657846696c6553657422480a0c53616d706c654d6574686f64121d0a" .
            "1953414d504c455f4d4554484f445f554e53504543494649454410001207" .
            "0a03544f50100112100a0c52414e444f4d5f5354415254100222220a1343" .
            "6c6f756453746f7261676546696c65536574120b0a0375726c1801200128" .
            "0922200a10436c6f756453746f7261676550617468120c0a047061746818" .
            "0120012809228b030a0f42696751756572794f7074696f6e73123d0a0f74" .
            "61626c655f7265666572656e636518012001280b32242e676f6f676c652e" .
            "707269766163792e646c702e76322e42696751756572795461626c65123a" .
            "0a126964656e74696679696e675f6669656c647318022003280b321e2e67" .
            "6f6f676c652e707269766163792e646c702e76322e4669656c6449641212" .
            "0a0a726f77735f6c696d6974180320012803121a0a12726f77735f6c696d" .
            "69745f70657263656e74180620012805124a0a0d73616d706c655f6d6574" .
            "686f6418042001280e32332e676f6f676c652e707269766163792e646c70" .
            "2e76322e42696751756572794f7074696f6e732e53616d706c654d657468" .
            "6f6412370a0f6578636c756465645f6669656c647318052003280b321e2e" .
            "676f6f676c652e707269766163792e646c702e76322e4669656c64496422" .
            "480a0c53616d706c654d6574686f64121d0a1953414d504c455f4d455448" .
            "4f445f554e535045434946494544100012070a03544f50100112100a0c52" .
            "414e444f4d5f53544152541002229a040a0d53746f72616765436f6e6669" .
            "6712440a116461746173746f72655f6f7074696f6e7318022001280b3227" .
            "2e676f6f676c652e707269766163792e646c702e76322e4461746173746f" .
            "72654f7074696f6e734800124b0a15636c6f75645f73746f726167655f6f" .
            "7074696f6e7318032001280b322a2e676f6f676c652e707269766163792e" .
            "646c702e76322e436c6f756453746f726167654f7074696f6e7348001243" .
            "0a116269675f71756572795f6f7074696f6e7318042001280b32262e676f" .
            "6f676c652e707269766163792e646c702e76322e42696751756572794f70" .
            "74696f6e734800124c0a0f74696d657370616e5f636f6e66696718062001" .
            "280b32332e676f6f676c652e707269766163792e646c702e76322e53746f" .
            "72616765436f6e6669672e54696d657370616e436f6e6669671ada010a0e" .
            "54696d657370616e436f6e666967122e0a0a73746172745f74696d651801" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d70122c0a08656e645f74696d6518022001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d7012370a0f74696d657374616d" .
            "705f6669656c6418032001280b321e2e676f6f676c652e70726976616379" .
            "2e646c702e76322e4669656c64496412310a29656e61626c655f6175746f" .
            "5f706f70756c6174696f6e5f6f665f74696d657370616e5f636f6e666967" .
            "18042001280842060a047479706522600a0b42696751756572794b657912" .
            "3d0a0f7461626c655f7265666572656e636518012001280b32242e676f6f" .
            "676c652e707269766163792e646c702e76322e4269675175657279546162" .
            "6c6512120a0a726f775f6e756d626572180220012803223e0a0c44617461" .
            "73746f72654b6579122e0a0a656e746974795f6b657918012001280b321a" .
            "2e676f6f676c652e707269766163792e646c702e76322e4b657922bb010a" .
            "034b657912380a0c706172746974696f6e5f696418012001280b32222e67" .
            "6f6f676c652e707269766163792e646c702e76322e506172746974696f6e" .
            "496412340a047061746818022003280b32262e676f6f676c652e70726976" .
            "6163792e646c702e76322e4b65792e50617468456c656d656e741a440a0b" .
            "50617468456c656d656e74120c0a046b696e64180120012809120c0a0269" .
            "641802200128034800120e0a046e616d65180320012809480042090a0769" .
            "645f7479706522a1010a095265636f72644b6579123c0a0d646174617374" .
            "6f72655f6b657918022001280b32232e676f6f676c652e70726976616379" .
            "2e646c702e76322e4461746173746f72654b65794800123b0a0d6269675f" .
            "71756572795f6b657918032001280b32222e676f6f676c652e7072697661" .
            "63792e646c702e76322e42696751756572794b6579480012110a0969645f" .
            "76616c75657318052003280942060a047479706522490a0d426967517565" .
            "72795461626c6512120a0a70726f6a6563745f696418012001280912120a" .
            "0a646174617365745f696418022001280912100a087461626c655f696418" .
            "032001280922730a0d42696751756572794669656c6412330a057461626c" .
            "6518012001280b32242e676f6f676c652e707269766163792e646c702e76" .
            "322e42696751756572795461626c65122d0a056669656c6418022001280b" .
            "321e2e676f6f676c652e707269766163792e646c702e76322e4669656c64" .
            "496422390a08456e746974794964122d0a056669656c6418012001280b32" .
            "1e2e676f6f676c652e707269766163792e646c702e76322e4669656c6449" .
            "642a740a0a4c696b656c69686f6f64121a0a164c494b454c49484f4f445f" .
            "554e535045434946494544100012110a0d564552595f554e4c494b454c59" .
            "1001120c0a08554e4c494b454c591002120c0a08504f535349424c451003" .
            "120a0a064c494b454c591004120f0a0b564552595f4c494b454c5910052a" .
            "500a0846696c655479706512190a1546494c455f545950455f554e535045" .
            "4349464945441000120f0a0b42494e4152595f46494c451001120d0a0954" .
            "4558545f46494c45100212090a05494d4147451003428f010a19636f6d2e" .
            "676f6f676c652e707269766163792e646c702e7632420a446c7053746f72" .
            "61676550015a38676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f707269766163792f646c702f76323b" .
            "646c70aa0213476f6f676c652e436c6f75642e446c702e5632ca0213476f" .
            "6f676c655c436c6f75645c446c705c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
