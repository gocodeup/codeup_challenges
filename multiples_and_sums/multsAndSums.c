/*
*multsAndSums is a C language solution to the Git Hub Multiples and multsAndSums
* codeup challenge.
*/

#include <stdio.h>
#define UPPER_LIMIT 1000

int main(void)
{
  int sum = 0;

  for (int i = 0; i < UPPER_LIMIT; i++)
  {
    if ((i % 3 == 0) || (i % 5 == 0))
       sum += i;
  }

  printf("The sum of all integers divisible by 5 or 3 between 0 and %i is: %i\n", UPPER_LIMIT, sum);
  return 0;
}
