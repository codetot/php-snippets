# Build a PHP array to <table></table> markup

## Case: Missing `<td></td>` if in loop there is no value defined.

**Resolve:** We create a second loop to check if value exists, and replace with `$replace_string` if missing.

```
/**
 * This function will help to add a $replace_string to each missing column in table.
 * Helpful with <table></table> structure.
 * @param array $array
 * @param string $matching_row
 * @param string $replace_string
 * @return array
 */
function codetot_update_table_empty_column($array, $matching_row, $replace_string = '-') {
  return array_map(function($row) use($matching_row, $replace_string) {
    if (empty($row[$matching_row])) {
      $row[$matching_row] = $replace_string;
    }

    return $row;
  }, $array);
}
```
