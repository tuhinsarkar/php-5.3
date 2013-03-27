<?php
/**
 * Description of AMSBaseClass
 *date:     status:incomplete     unit testing:NA       integration testing:NA
 * UNIT TESTING(details):NA
 * @author tty
 */
abstract class AMSBaseClass {
   /* to generate a uinique id, that will be used as primary key in each table
    * this is a static method, so we don't have to create any object of 
    * AMSBaseClass while calling this method.
   */
    final public static function uniqueIDGenerator(){
        $letters = range('A', 'Z');
        shuffle($letters);
       return( md5(time() . implode('', $letters) . rand()));
  }
  /* to generate a uinique id, that will be used as the file name while 
   * uploading a file
   * this is a static method, so we don't have to create any object of 
   * AMSBaseClass while calling this method.
   */
  final public static function uniqueRandom(){
      $start=0;
      $end=3;
      $cn=2;
      for($i=$start;$i<=$end;++$i){
                $arr[$i]=$i;
            }
            $c=$cn;
            for($i=0;$i<$cn;++$i){
                $rval=  rand($start, $end);
               $rval=$rval%$end+1;
                $arr1[$i]=$arr[$rval];
                $arr[$rval]=$arr[$c];
                $c--;
            }
            return $arr1;
  }

  final public static function UniqueFileName(){
        return rand(100,10000);
    }
}

?>
