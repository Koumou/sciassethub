namespace App\Services;

class ChemicalService
{

    public function convert_chemical_name_to_chemical_formula($names)
{

    $results = [];

    // Split the input string into an arraFy of names
    $nameArray = explode(',', $names);

    foreach ($nameArray as $inputName) {
        $inputName = trim($inputName); // Remove leading/trailing whitespaces

        foreach ($this->items as $item) {
            if ($item['name'] === $inputName) {
                $results[$inputName] = $item['formula'];
                break; // Stop searching once a match is found
            }
        }

                  // If no match is found, set 'Item not found' for that name
                  if (!isset($results[$inputName])) {
                    $results[$inputName] = 'Item not found';
                }
            }
    
            return $results;
        }

}