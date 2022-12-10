function find_uniq($a) {
  rsort($a);
  return ($a[1] == $a[0]) ? end($a) : $a[0];
}