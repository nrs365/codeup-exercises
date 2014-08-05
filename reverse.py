#!/usr/bin/python
import sys
import getopt


def reverse(word):
	# """
	# Prints out the provided word in reverse.
	# Example: If provided word = 'fragile', this method should print: 
		
	# 	original: fragile
	# 	reversed: eligarf

	# """

	# print "original: %s" % word
	# my_list = [1, 2, 3]
	# # Do your reversal magic here and assign the result to the variable reversed_word

	# reversed_word = ''.join(reversed(word)) # TODO: When you are able to reverse the word assign it to this variable
	
	# print "reversed: %s" % reversed_word
	for i in range(1,10):
		print i



def main():

    # parse command line options
    try:
        opts, args = getopt.getopt(sys.argv[1:], "h", ["help"])
    except getopt.error, msg:
        print msg
        print "for help use --help"
        sys.exit(2)
    # process options
    for o, a in opts:
        if o in ("-h", "--help"):
            print __doc__
            sys.exit(0)
    # process arguments
    for arg in args:
    	reverse(arg)
    	print '-------------------'

if __name__ == "__main__":
    main()