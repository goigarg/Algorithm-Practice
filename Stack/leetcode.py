class Solution:
    def isValid(self, s: str) -> bool:
        arr = []

        def stackPush(data):
            arr.append(data)

        def stackPop():
            if (len(arr) > 0):
                return arr.pop()
            else:
                return False

        for c in s:
            if(c in '({['):
                stackPush(c)
            if(c in ')}]'):
                x = stackPop()
                if (c == ')' and x == '('):
                    ans = True
                elif(c == '}' and x == '{'):
                    ans = True
                elif(c == ']' and x == '['):
                    ans = True
                else:
                    ans = False
            x = 0
        if(len(arr) != 0):
            return False
        return ans


sol = Solution()
s = "([]){"
print(sol.isValid(s))
